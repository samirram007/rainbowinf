<div id="NewsHeadLine">
    <marquee class="marquee" onmouseover="this.stop()" onmouseout="this.start()" truespeed='true' scrolldelay="100">

        @foreach ($news as $ns)
            <span onclick="rad('news',1,7);">
                <div class="OrangeBall"></div><span class="new"> </span>&nbsp;&nbsp;{{ $ns->name }}
            </span>
        @endforeach
    </marquee>
</div>
<style>
    .marquee:hover {
        cursor: pointer;
    }
</style>
