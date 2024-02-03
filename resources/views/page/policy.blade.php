@extends('layouts.client')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <style>
        h1, h2, h3, h4, h5, h6 {
            margin-top: 30px;
            margin-bottom: 10px;
        }
        p {
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .content {
            padding-bottom: 50px !important;
            padding-top: 15px !important;
            height: auto !important;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <h3 class="c1" id="h.6omelenyw6f9"><span class="c5">Points of Data Gathering</span>
        </h3>
        <p class="c2"><span class="c0">Account Registration: During account registration we may collect your contact information, including:</span>
        </p>
        <p class="c4"><span class="c0">name</span></p>
        <p class="c4"><span class="c0">email address</span></p>
        <p class="c4"><span class="c0">company name</span></p>
        <p class="c4"><span class="c0">address</span></p>
        <p class="c4"><span class="c0">telephone number</span></p>
        <p class="c2"><span class="c0">The email addresses of referrals you elect to enter may also be collected and we may send a promotional code to the referral email address containing discounts or incentives targeted at the recipient of the email and you.</span>
        </p>
        <p class="c2"><span class="c0">User Content: Our &ldquo;Community&rdquo; feature allows you to publicly submit or post content via our web sites (Sub domains of aidet.tech), applications, and services. You agree that your profile information and the content submitted by you may be used and viewed by other users and third parties by using &ldquo;Community&rdquo; features.</span>
        </p>
        <p class="c2"><span class="c0">Payment Information: Any financial account information added to your account is directed to our third party payment processor and it is stored by them. We do have access to subscriber information through our third party payments provider and may retain data about our subscribers through our third party payments processor.</span>
        </p>
        <p class="c2"><span class="c0">Communications: We may receive additional information about you when you contact us directly, including the contents of the message you sent including any attachments or other information or media you have chosen to provide. We may also track confirmations sent when you open an email from us.</span>
        </p>
        <p class="c2"><span class="c0">Service Tracking via Cookies and Other Tracking Technologies: As is the case for most websites, mobile or progressive web applications, we track and aggregate service interaction data automatically and store it. Information we collect may include:</span>
        </p>
        <p class="c4"><span class="c0">Browser Type</span></p>
        <p class="c4"><span class="c0">IP addresses</span></p>
        <p class="c4"><span class="c0">Internet service provider</span></p>
        <p class="c4"><span class="c0">operating system</span></p>
        <p class="c4"><span class="c0">landing/referring/exit pages</span></p>
        <p class="c4"><span class="c0">date/time stampclickstream data</span></p>
        <p class="c2"><span class="c0">A cookie or cookies, containing a small amount of information allowing us to recognize you, may be set on your device or computer to collect this information. Information we collect using cookies includes your user preferences and may also include usage patterns with respect to our services, frequency of visits, and other information. The cookies may also give us the ability to track you across different devices, applications, and sites. Countries in the European Economic Area (&ldquo;EEA&rdquo;), and some other countries, consider the information referenced above personal information under applicable data protection laws.</span>
        </p>
        <p class="c2"><span class="c0">We do use Google Analytics and Google Analytics cookies. For anonymous users we have a data processing agreement with google.</span>
        </p>
        <p class="c2"><span class="c0">We have enabled IP anonymization/masking. We have also disabled data sharing. We are not using any other google services in combination with Google Analytics for anonymous users (User without an account that have not consented to GA cookie tracking).</span>
        </p>
        <p class="c2"><span class="c0">Service Meta Data: When services are invoked the services collect meta data that helps us design and scale our services, develop new features, and provide customer support. Data can include batch sizes, errors, data volume, memory usage, and other metrics that we think will help us design, improve, and manage our services better with respect to security, safety, and design simplicity. Data aggregation feeds are also used to create business intelligence analysis reports that help us protect, operate, and make informed decisions with respect to our business.</span>
        </p>
        <p class="c2"><span class="c0">Third Party Data: When accounts are linked to third parties we receive data from those third parties, including authentication tokens and authorization tokens. Review the privacy settings of the third party to learn more about their operating procedures and options with respect to privacy protection. Our third party partner data may also provide us with additional publicly available information about you that we may use to better predict the types of services or application settings that will be most useful to you.</span>
        </p>
        <h3 class="c1" id="h.xana8mkzwp5t"><span class="c5">Information Usage</span></h3>
        <p class="c2"><span class="c0">Information collected is used to:</span></p>
        <p class="c4"><span class="c0">Operate, provide, maintain, personalize, expand, and secure our Services</span>
        </p>
        <p class="c4"><span class="c0">Develop new services, products, features, and other functionality</span></p>
        <p class="c4"><span class="c0">Provide customer support and anticipate customer support needs</span></p>
        <p class="c4"><span class="c0">Create direct communication with you</span></p>
        <p class="c4"><span class="c0">Create indirect communication with through one of our partners, in order to provide you with information relating to our service, promotions, or other marketing purposes</span>
        </p>
        <p class="c4"><span class="c0">Process transactions</span></p>
        <p class="c4"><span class="c0">Send messages, including push notifications</span></p>
        <p class="c4"><span class="c0">Scan for and prevent fraudulent activity</span></p>
        <p class="c2"><span class="c0">Ensure compliance with our Terms of Service or other legal rights required by application regulations and laws or as requested by a government agency or judicial process</span>
        </p>
        <h3 class="c1" id="h.ajrrpb8ev4o1"><span class="c5">Information Sharing</span></h3>
        <p class="c2"><span class="c0">Vendors and Service Provision Partners: Information may be shared with third party vendors and service providers that provide services that are used to deliver our web sites, applications, service functionality, promotional or marketing activities, and to provide product announcements and other messaging, software updates, special offers, or other information.</span>
        </p>
        <p class="c2"><span class="c0">Referral: when using a referral to sign up for services, that referral activation is shared with the party that provided it in order to let them know that their referral recommendation was accepted.</span>
        </p>
        <p class="c2"><span class="c0">Analytics: Analytics providers, such as Google Analytics, use cookies to collect non-identifying information. For more information on Google privacy options see http://www.google.com/policies/privacy/partners/.</span>
        </p>
        <p class="c2"><span class="c0">Aggregate Information: We may, when legally permissible, both use and/or share aggregated and de-identified information about users with our partners.</span>
        </p>
        <p class="c2"><span class="c0">Advertising: We may work with third-party advertising partners to show you ads. These advertising partners may set and access cookies or use similar tracking technologies on our Services in order to collect information. Some of our advertising partners are members of the Digital Advertising Alliance or the Network Advertising Initiative. To opt-out of or learn more about these programs visit the Network Advertising Initiative at www.networkadvertising.org or the Digital Advertising Alliance&rsquo;s Self-Regulatory program for Online Behavioral Advertising at www.aboutads.info.</span>
        </p>
        <p class="c2"><span class="c0">Third-Party Partners: In order to receive additional publicly available information about users we share information about users with third-party partners.</span>
        </p>
        <p class="c2"><span class="c0">Business Transfers: In the event of a business transfer, information may be disclosed and otherwise transferred to any potential successor, acquirer, or assignee as part of any proposed acquisition, merger, debt financing, sale of assets, or similar transaction, or in the event of bankruptcy, insolvency, or receivership in which information is transferred to one or more third parties as one of our business assets.</span>
        </p>
        <p class="c2"><span class="c0">As Required By Law: Information may be shared in order to:</span></p>
        <p class="c4"><span
                    class="c0">Satisfy any applicable legal process, law, governmental request, or regulation</span></p>
        <p class="c2"><span class="c0">Inventigate any potential violations of this Privacy Policy and our Terms of Service and for the purposes of enforcing the Terms of Service.</span>
        </p>
        <p class="c2"><span class="c0">Detect technical issues</span></p>
        <p class="c2"><span class="c0">Prevent fraud or other security issues</span></p>
        <p class="c2"><span class="c0">Respond to user requests</span></p>
        <p class="c2"><span class="c0">Protect the rights of users and their safety, including exchanging information with other organizations and companies for fraud protection and protection concerning security and safety in general.</span>
        </p>
        <h3 class="c1" id="h.kntf0gh1199h"><span class="c5">Processing of Personal Information Legal Basis</span></h3>
        <p class="c2"><span class="c0">Our legal basis for collecting and using the personal information depends on the specific context in which we collect it and the personal information details.</span>
        </p>
        <p class="c2"><span class="c0">Normally we collect personal information from you where:</span></p>
        <p class="c4"><span class="c0">It is needed in order to execute a contract with you</span></p>
        <p class="c4"><span class="c0">We have legitimate interests in processing it and the interest is not overridden by your rights.</span>
        </p>
        <p class="c4"><span class="c0">We have your consent to collect personal information.</span></p>
        <p class="c4"><span class="c0">We have a legitimate interest in communicating with you as part of operating our Services. This includes responding to your questions, undertaking marketing or survey activities, improving our platform, or when we are detecting or preventing illegal activity.</span>
        </p>
        <p class="c4"><span class="c0">We have a legal obligation to collect personal information from you</span></p>
        <p class="c2"><span class="c0">Need the personal information to protect your vital interests, or the interests of other users or third parties.</span>
        </p>
        <p class="c2"><span class="c0">If we ask you to provide personal information in order to execute a contract or in accordance with other legal requirements, we will make this clear at the time the information is being collected in addition to making it clear whether the provision of your personal information is mandatory.</span>
        </p>
        <h3 class="c1" id="h.a4jjs4t3ucp"><span class="c5">Third-party Services</span></h3>
        <p class="c2"><span class="c0">Carefully review third party privacy policies before accessing their service in conjuction with the use of our services. We do not control and can not be responsible for the practices or privacy policies of third-party services.</span>
        </p>
        <h3 class="c1" id="h.yf4byiaut9u"><span class="c5">Security</span></h3>
        <p class="c2"><span class="c6">aidet.tech</span><span class="c0">&nbsp;is committed to protecting and keeping safe and secure all of your information and data. We employ a variety of measures and security technologies designed to protect information from unauthorized disclosure, access, or use. Even though we strive for 100% security with the measures we put in place, and intend to put in place options to use the most secure technology available, the internet can never be guaranteed to be 100% secure, so keep your guard up. Our security measures are designed to provide a level of security appropriate to the risk of processing your personal information.</span>
        </p>
        <h3 class="c1" id="h.9bmxj5hdsidx"><span class="c5">Data Retention</span></h3>
        <p class="c2"><span class="c0">Personal information we collect from you is retained when we have an ongoing legitimate business need to do so (for example, to provide you with a service you have requested or to comply with applicable tax, legal, or accounting requirements).</span>
        </p>
        <p class="c2"><span class="c0">At the time when we have no further legitimate business need to retain or process your personal information, we will either anonymize or delete it when possible. If personal information has been archived in a way that does not make it simple to process the data, then we will isolate the information from access and process until our archive cleanup routines delete the information&hellip;</span>
        </p>
        <h3 class="c1" id="h.q2bxumm9eiwg"><span class="c5">Access</span></h3>
        <p class="c2"><span class="c0">Registered users may login in order to access their profile information associated with their Account. Public information related to your account that is stored on our servers will remain in the event that you delete your account and it wil be accessible to the public.</span>
        </p>
        <p class="c2"><span class="c0">We take reasonable steps to verify your identity before updating or removing your information. Our backup processes archive the information you provide us periodically for disaster recovery purposes.</span>
        </p>
        <p class="c2"><span class="c0">Your ability to correct your information could may be temporarily limited in the event that retrieval and correction could inhibit aidet.tech from:</span>
        </p>
        <p class="c4"><span class="c0">Complying with legal regulations, orders, or obligations.</span></p>
        <p class="c4"><span class="c0">Investigating, making, or defending legal claims.</span></p>
        <p class="c4"><span class="c0">Preventing breach of a contract</span></p>
        <p class="c4"><span
                    class="c0">Preventing disclosure of trade secrets or business information that is private</span></p>
        <h3 class="c1" id="h.yh8q58fgxlh"><span class="c5">General Data Protection Regulation (GDPR) Rights</span></h3>
        <p class="c2"><span class="c0">In general to request the enforcement of any of the below rights email us at aidet.tech legal.</span>
        </p>
        <p class="c2"><span class="c0">Resident of the EEA have the right to:</span></p>
        <p class="c4"><span class="c0">Request deletion of personal information by emailing aidet.tech legal.</span></p>
        <p class="c4"><span
                    class="c0">Access, correct, and update, personal information through general account access.</span>
        </p>
        <p class="c4"><span class="c0">Object to processing of, or ask us to restrict, or request portability of the personal information.</span>
        </p>
        <p class="c4"><span class="c0">Opt out of marketing communications by clicking on &ldquo;Unsubscribe&rdquo; on the messages or communication sent.</span>
        </p>
        <p class="c2"><span class="c0">In the event that we do not have a clear way to opt out of a messaging process please email us at aidet.tech legal</span>
        </p>
        <p class="c2"><span class="c0">You can also withdraw your consent to the processing of personal information at any time, however this does not affect the lawfulness of any processing of data for personal information conducted prior to you withdrawing your consent.</span>
        </p>
        <p class="c2"><span class="c0">Complain to a data protection authority about our use of and collection of your personal information. All individuals wishing to exercise their data protection rights can contact us at aidet.tech legal and we will provide a response to all requests received.</span>
        </p>
        <p class="c2"><span class="c0">For more details on how we handle your data and to access our Data Processing Agreement, please visit https://aidet.tech/legal#dpa</span>
        </p>
        <h3 class="c1" id="h.sw2ldlo4mckx"><span class="c5">Your Choices</span></h3>
        <h3 class="c1" id="h.m730x7rvjxt7"><span class="c5">Unsubscribing</span></h3>
        <p class="c2"><span class="c0">Some of the service features provided may be used without registering, thereby limiting the type of information that we collect.</span>
        </p>
        <p class="c2"><span class="c0">At any time you may unsubscribe from receiving operational updates or promotional emails from us by simply following the instructions at the end of the email. Critical messaging with respect to transactions, billing, security, or other account related business messaging cannot be unsubscribed from.</span>
        </p>
        <h3 class="c1" id="h.sbrqp9cpujyr"><span class="c5">Cookies</span></h3>
        <p class="c2"><span class="c0">If your browser has cookies disabled or is selective in what cookies it allows, some personalization features of our services may no longer work. Also features such as automatic remember me login, UI customizations, tailored advertising, and other features that rely on knowing more about you may be switched off.</span>
        </p>
        <h3 class="c1" id="h.rifunftqgs1z"><span class="c5">Minors</span></h3>
        <p class="c2"><span class="c0">All users warrant to aidet.tech that he or she is at least over the age of 18 or the age of majority in the state or province of residence, and may therefore form binding contracts under applicable law.</span>
        </p>
        <p class="c2"><span class="c0">Since aidet.tech services are targeted at and allow adults only aidet.tech cannot not and does not knowingly collect information from anyone under the age 18 or majority.</span>
        </p>
        <p class="c2"><span class="c0">In the event that a child has submitted personal information in violation of this Privacy Policy, inform us at aidet.tech legal.</span>
        </p>
        <h3 class="c1" id="h.7cwq5lb5lnbo"><span class="c5">Privacy Policy Changes</span></h3>
        <p class="c2"><span class="c0">As this Privacy Policy may be modified periodically in order to keep up with laws and regulations, please review it whenever you are concerned that something may be of material impact to you.</span>
        </p>
        <p class="c2"><span class="c0">The URL for reviewing any changes to all our legal agreements, including this Privacy Policy, is https://aidet.tech/legal.</span>
        </p>
        <p class="c2"><span class="c0">Notifications of material changes to ways that we collect, use, or share personal information will be emailed to you or we will notify you at the time you are using the service.</span>
        </p>
        <h3 class="c1" id="h.z9uva9vjek9j"><span class="c5">International Data Transfers</span></h3>
        <p class="c2"><span class="c6">aidet.tech</span><span class="c0">&nbsp;does business globally. Data may be transferred between countries and we may transfer personal information to countries other than the country in which the personal data was first collected which may not have the same data protection laws as the country in which the data was initially provided. Personal information transferred between countries will be protected in accordance with this Privacy Policy.</span>
        </p>
        <p class="c8"><span class="c7"></span></p>
    </div>
@endsection
