<section id="newsroom" class="section news container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading h2 base-color  ">
                News Room
                <hr>
            </div>
            <div class="card-container  ">
 
                @forelse ($news as $key=>$ns)
                    <a class="docs-card bg-light" data-aos="fade-left flip-right" >

                        <section>
                            @if($key<5)
                            <strong class="latest" >Latest </strong>

                            @endif
                            {{ $ns->name }}
                         
                        </section>

                        <p class="base-color"> {!!$ns->details !!}</p>
<div class="px-3   text-secondary"> <small> Published On: {{ date('d-M-Y H:i', strtotime($ns->published_at))}}</small></div>
                        <div class="docs-footer">
                            see more
                        </div>
                    </a>
                @empty
no News Available
                @endforelse



            </div>
        </div>
    </div>
</section>
