@extends('layouts.app')

@section('content')


    <div class="container-fluid" style="margin-top: 80px;">
       
                              @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                    @endif
                                    @if(session()->has('error'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ session()->get('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                     @endif
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">About Dcode </h2>
                        <article id="page-8" class="single-page post post-8 page type-page status-publish hentry">

     
    <div class="entry-content">
        <p>Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>
<ul>
<li>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li>
<li>We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.</li>
<li>We will only retain personal information as long as necessary for the fulfillment of those purposes.</li>
<li>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li>
<li>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</li>
<li>We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li>
<li>We will make readily available to customers information about our policies and practices relating to the management of personal information.</li>
</ul>
<p>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.</p>
<p><strong>COOKIE POLICY</strong><br>
To enhance your experience on our sites, many of our web pages use “cookies”. Cookies are small text files that we place in your computer’s browser to store your preferences. Cookies, by themselves, do not tell us your email address or other personal information unless you choose to provide this information to us by, for example, registering at one of our sites. Once you choose to provide a web page with personal information, this information may be linked to the data stored in the cookie. A cookie is like an identification card. It is unique to your computer and can only be read by the server that gave it to you.</p>
<p>We use cookies to understand site usage and to improve the content and offerings on our sites. For example, we may use cookies to personalise your experience on our web pages (e.g. to recognise you by name when you return to our site). We also may use cookies to offer you products and services.</p>
<p>Cookies save you time as they help us to remember who you are. Cookies help us to be more efficient. We can learn about what content is important to you and what is not. We can revise or remove web pages that are not of interest and focus our energies on content you want.</p>
<p>If you want to control which cookies you accept. You can configure your browser to accept all cookies or to alert you every time a cookie is offered by a website’s server. Most browsers automatically accept cookies. You can set your browser option so that you will not receive cookies and you can also delete existing cookies from your browser. You may find that some parts of the site will not function properly if you have refused cookies.</p>
<p>Please be aware that if you do not configure your browser you will accept cookies provided by this website.</p>
<p>How to see cookies that you have accepted. You can configure your browser to accept all cookies or to alert you every time a cookie is offered by a website’s server.</p>
    </div>

    
</article>
                    </div>

                </div>
                 <br>
                <div class="row">
                    


                </div>

            </div> 
           <!--  <a href="/products" class="btn btn-info bg-dark align-center">Show All</a> -->
        </div>
    </div>
    
@endsection
