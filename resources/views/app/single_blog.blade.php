@extends('layouts.index')

@section('content')
    {{-- BLOG IMG AND TITLE SECTION STARTS HERE --}}
    <section class="overflow-hidden">
        <div class="row overflow-hidden">
            <div class="col-xl-7 col-md-8 mx-auto p-3 p-md-5">
                <div>
                    {{-- img --}}
                    <img class="lozad" data-src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720.png') }}"
                        alt="">
                </div>
                <div>
                    {{-- title --}}
                    <div class="fs-1 custom-text-2 text-center fw-bold pt-3">
                        Google Incorporates Generative AI Into Its Search Engine
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BLOG IMG AND TITLE SECTION ENDS HERE --}}

   
    {{-- BLOG CONTENT SECTION STARTS HERE --}}
    <section class="overflow-hidden">
        <div class="row p-3">
            <div class="col-xl-7 col-md-8 mx-auto p-3 p-md-5 blg-sin-cont-p">
                <div>
                    <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                        information on the web. Throughout that time, Google has continually developed new ways to improve
                        its search results and make it easier for users to find what they’re looking for.</p>
                    <p>With advances in generative AI technology, Google is again changing how we use its search engine by
                        unlocking entirely new types of questions that can be answered via Search.</p>
                    <p>With this latest breakthrough in AI-powered technology, you will have an even more comprehensive
                        understanding when making complex decisions – all while ensuring a wide range of information remains
                        accessible from your fingertips.</p>
                    <p>
                        Let’s take a look at this latest Google innovation, what it means for your search experience and its
                        implications for the future of marketing.
                    </p>
                </div>
                <div>
                    <h2 class="fs-2 fw-bold">
                        Not Just Another Co-Pilot for the Web – It’s a Search Generative Experience
                    </h2>
                    <p>
                        If all this sounds familiar, that’s because another company unveiled a similar technology in 2023:
                        Microsoft. Pegged as your co-pilot of the web, Microsoft Bing’s Chat feature pioneered generative AI
                        into the search experience, increasing Bing’s web traffic right after Chat’s release.
                    </p>
                    <p>
                        Of course, Google must protect its core business (Search Ads). Hence, their release of an eerily
                        familiar feature.
                    </p>
                    <p>Their counterpart is called Search Generative Experience (SGE). While it may sound like a handful, it
                        makes it “easy for people to dive deeper on the topic they’re learning about,” says Google in their
                        blog post.</p>
                    <p>“Search Generative Experience is the new generative AI created by Google that helps improve users’
                        search experience by providing concise, easy-to-understand answers to users’ queries, using
                        corroborated information from reliable web sources,” said Ken Romero, Whippdigital’s SEO Strategist.</p>

                    <p>
                        Basically, Google Search scours the web to help you:
                    <ul>
                        <li>Understand a topic faster</li>
                        <li>Discover new viewpoints</li>
                        <li> Complete tasks more efficiently</li>
                    </ul>
                    </p>
                    <p>Take a look at this Google search asking for a comparison of two U.S. national parks and which one is
                        more family-friendly:</p>

                    <div class="py-2">

                        <img class="lozad" data-src="{{ asset('assets/imgs/Google-search-asking-for-a-comparison.png') }}" alt="blog">
                    </div>
                    <p>
                        In the new Search, Google collates information it finds from the web and gives you its own insights
                        on these two national parks. It offers reasons why you may want to choose one park over the other.
                        In this case, you’ll want to go to Bryce Canyon because it has two paved trails that allow for dogs.
                    </p>
                    <p>Next, you’ll find a section below that generative AI that suggests your next steps and the pages you
                        might want to visit to find more information about these two national parks.</p>

                    <p>All these generative AI content and suggestions sit on top of organic search results after Google
                        finishes “generating” its answers.</p>

                    <p>However, SGE won’t generate answers if it’s confident enough about its response. This happens when
                        there are data voids or information gaps that Google simply won’t be able to fill. If you’re
                        planning to enlist Google’s help for something dangerous, it won’t help you either. SGE won’t
                        generate an AI response if it feels like you’re venturing into harmful territory.</p>


                    <p>
                        What’s important to take note of about Google’s take on their search experience is they still want
                        people to go to websites with valuable content. That’s why there are a lot of content suggestions
                        (and, yes, Ads) on their generative AI.
                    </p>
                    <p>
                        This answers a serious concern about AI chatbots: how will publishers and website owners monetize
                        Google Search? Well, Google cleverly integrates your content into their AI powered search if they
                        deem it good enough.
                    </p>
                </div>
                <div class="border-t">
                    <h2 class="fs-2 fs-bold">
                        What We Know So Far
                    </h2>
                    <p>So, is it any good? Will it become one of the best AI tools out there? We don’t want you to take our
                        word for it, so here’s what we know so far about Google’s AI-powered search experience.</p>


                    <h2 class="fs-2 fs-bold">
                        It’s Different From Bard
                    </h2>
                    <p>There have been rumors about tons of features and integrations that Bard will get in the future. Some
                        even speculated that Bard would eventually replace Search as your go-to resource for information.
                        Turns out, they’ll be two separate products that offer distinct experiences when getting information
                        from the Internet.</p>


                    <h2 class="fs-2 fs-bold">
                        Ads and Blue Links Are Still There
                    </h2>
                    <p>For publishers and advertisers, this AI-powered search still presents opportunities to monetize
                        Google.</p>
                    <p>
                        After all, SGE wants to improve your search experience, not replace it with generated content.
                        Therefore, you’ll still see links to sources on the side and below them.
                    </p>
                    <p>
                        In the GIF below, you’ll see that Search’s generated answers are boxed with websites linked through
                        images so you can dig deeper into these products and websites yourself.
                    </p>
                    <div>
                        <img class="lozad" data-src="{{ asset('assets/imgs/SGE-Bluetooth-Speakers-GIF.gif') }}" alt="">
                    </div>
                    <p>
                        Ads will still be part of your search experience with “dedicated slots throughout the page.” You’ll
                        know when a displayed result is an ad or not, just as you would with the old Google search
                        experience.
                    </p>
                    <p class="pb-2">
                        If you notice, the colors of these generated answer boxes depend on the user’s journey and intent.
                        If you’re using Search for more informational data, the box color would be green. On the other hand,
                        if you’re using Searching for shopping, it would be light purple. It’s just another touch in
                        Google’s interface that makes the experience more enjoyable.
                    </p>

                </div>
                {{-- join whipp digital today  --}}
                <div class="py-3 border-top">
                    <h2 class="fs-2 fw-bold">
                        Join Whipp Digital Growth Insider Today
                    </h2>
                    <p>
                        That’s all for our detailed look at Google’s SGE. We expect it to be just another step in a long
                        line of Google Search Engine updates. And we’ll keep you updated on this space’s latest developments
                        and trends.
                    </p>
                    <p>
                        Whippdigital is a leading digital marketing company with a team of experts, thought leaders and highly
                        experienced strategists. We’re here to help you stay ahead of the competition and develop effective
                        marketing strategies for your business
                    </p>
                    <p>
                        Subscribe to our Growth Insider list and get your hands on the latest Google Search Engine updates.
                        It’s free, easy to join and you’ll be among the first to know whenever there are vital Google Search
                        updates, fresh digital marketing best practices and more!
                    </p>
                    <p>
                        <span class="entry-categories">Filed Under: <a href="#" rel="category tag">Search Engine
                                Optimization</a>, <a href="#" rel="category tag">Whippdigital News</a>, <a href="/"
                                rel="category tag">Content
                                Creation</a>, <a href="/" rel="category tag">Website Content</a>, <a href="#"
                                rel="category tag">Online
                                Marketing</a>, <a href="#" rel="category tag">Mobile Marketing</a>, <a href="#"
                                rel="category tag">Internet
                                Marketing</a></span>
                    </p>
                    {{-- leave reply --}}
                    <div>
                        <h3 class="fs-3 fw-bold">
                            Leave a Reply
                        </h3>
                        <p>
                            Your email address will not be published. Required fields are marked *
                        </p>
                        <form action="/" class="d-flex flex-column gap-3 blg-cont-form">

                            <label for="comment">
                                Comment<span class="required-ico"> * </span>
                            </label>
                            <textarea name="" id="" class="blg-cont-for-com-textarea" cols="30" rows="10"></textarea>
                            <label for="comment">
                                Name<span class="required-ico"> * </span>
                            </label>
                            <input type="text">
                            <label for="comment">
                                Email<span class="required-ico"> * </span>
                            </label>
                            <input type="">
                            <div
                                class="px-5 px-md-0 text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">
                                <button type="submit" class="lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5"
                                    href="#">POST COMMENT</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BLOG CONTENT SECTION ENDS HERE --}}


    {{-- ABOUT AUTHOR SECTION STARTS HERE --}}
    <section class="bg-green-2">
        <div class="container py-5 px-2">
            <div class="d-flex flex-column align-items-center
             flex-md-row col-lg-11 mx-auto gap-4 text-white">
                <div class=" col-4 blg-abo-auth-pic text-center text-md-start">
                    <img class="lozad" data-src="{{ asset('assets/imgs/cropped-Arrabon-Toribio.png') }}" alt="">
                </div>
                <div class="text-center text-md-start d-flex flex-column justify-content-center">
                    <h3 class="fs-1 fw-bold text-shadow-black">
                        About Arrabon Toribio
                    </h3>
                    <p>
                        Arrabon is a demand generation content writer at Whippdigital. He loves to bounce around the digital
                        space, looking for new marketing topics to explore. Beyond writing, Arrabon is a self-proclaimed
                        potato enthusiast with a soft spot for their house pet, Sparklets.
                    </p>
                    <button class="new-btn-s px-3 col-12 col-md-6 col-lg-4 col-xl-3">MORE POSTS (9)</button>
                </div>
            </div>
        </div>
    </section>
    {{-- ABOUT AUTHOR SECTION ENDS HERE --}}


    {{-- RELATED POST SECTION STARTS HERE --}}
    <section class="custom-bg-1">
        <div class="container-fulid  ">
            <div class="pt-5 pb-3 text-center">
                <p class="fs-3 fw-bold">
                    More
                    <span class="custom-text-2">
                        Related
                    </span>
                    Posts
                </p>
            </div>
            <div class="row justify-content-center   mx-auto gap-4 pb-5">
                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">

                        <a href="http://127.0.0.1:8000/blog/01">
                            <img src="http://127.0.0.1:8000/assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png"
                                alt="blog-1">
                        </a>

                        <h2 class="blg-cont-title fs-5 fw-bold ">
                            <a class="rec-blg-tit-hov" href="http://127.0.0.1:8000/blog/01">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>



                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>


                </article>

                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">

                        <a href="http://127.0.0.1:8000/blog/01">
                            <img src="http://127.0.0.1:8000/assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png"
                                alt="blog-1">
                        </a>

                        <h2 class="blg-cont-title fs-5 fw-bold ">
                            <a class="rec-blg-tit-hov" href="http://127.0.0.1:8000/blog/01">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>



                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>


                </article>

                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">

                        <a href="http://127.0.0.1:8000/blog/01">
                            <img src="http://127.0.0.1:8000/assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png"
                                alt="blog-1">
                        </a>

                        <h2 class="blg-cont-title fs-5 fw-bold ">
                            <a class="rec-blg-tit-hov" href="http://127.0.0.1:8000/blog/01">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>



                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>


                </article>

            </div>
        </div>
    </section>
    {{-- RELATED POST SECTION ENDS HERE --}}
@endsection
