<section id="newsroom" class="section news container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading h2 base-color  ">
                News Room
                <hr>
            </div>

        </div>
        <div class="row card-container ">
                @forelse ($news as $key=>$ns)
                <div class="col-md-3 p-2">
                    <a class=" docs-card bg-light " data-aos="fade-left flip-right">

                        <section  >
                            @if ($key < 5)
                                <strong class="latest">Latest </strong>
                            @endif
                            {{ $ns->name }}
                        </section>

                        <p class="base-color main-news"> {!! $ns->details !!}</p>
                        <div class="px-3   text-secondary"> <small> Published On:
                                {{ date('d-M-Y H:i', strtotime($ns->published_at)) }}</small></div>
                        <div class="docs-footer">
                            see more
                        </div>
                    </a>
                </div>

                @empty
                    no News Available
                @endforelse


    </div>
</section>
