@extends('layouts.client')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
@endpush
@php
    $percent = session('percent');
@endphp
@section('content')
    <div class="container">
        <div class="detector">
            <div class="detector__row">
                <div class="detector__sidebar">
                    <div class="detector__sidebar__score @if (isset($percent)) _active @endif">
                        <div class="detector__sidebar__score__percent">
                            <span>{{ $percent ?? 0 }}</span>
                            <img src="{{ asset('images/percent.svg') }}" alt="Percent"/>
                        </div>
                        <div class="detector__sidebar__score__title">
                            <h2>Detection Score</h2>
                            <h2>Human-Generated</h2>
                        </div>
                        <div class="detector__sidebar__score__bar">
                            <span style="width: {{ $percent ?? 100 }}%"></span>
                        </div>
                        <div class="detector__sidebar__text">{{ session('short_text') }}</div>
                        @if ($errors->any())
                            <div class="alert alert-danger mb-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <div class="detector__sidebar__score__feedback">
                                <h4>Feedback:</h4>
                                @if (isset($percent) && $percent < 50)
                                    <p>You should edit your text until there’s less detectable AI content.</p>
                                @else
                                    <p>This is human-written text</p>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="detector__sidebar__description">
                        <h1>AI Content Detector</h1>
                        <p>
                            Use our free detector to check up to 5,000 characters, and decide if you want to make
                            adjustments before you publish.
                            <br><br>
                            To start fill in “Text” input
                        </p>
                    </div>
                </div>
                <div class="detector__content">
                    <form action="{{ route('detect') }}" method="POST">
                        @csrf
                        <div class="detector__content__input-group detector__content__input-group--textarea">
                            <label for="text">Add text</label>
                            <textarea id="text" name="text" placeholder="Enter Text...">{{ old('text') }}</textarea>
                        </div>
                        <div class="detector__content__submit">
                            <div class="detector__content__submit__count">
                                <span>0</span>/5000 Characters
                            </div>
                            <div class="detector__content__submit__button">
                                <div class="detector__content__submit__button__hint">To enable button fill text
                                    above
                                </div>
                                <button type="submit">Analyze text</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
