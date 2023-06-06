<div id="NewsHeadLine">

    <marquee class="marquee"  onmouseover="this.stop()" onmouseout="this.start()" truespeed='true' scrolldelay="100">
        @foreach ($news as $ns)
        <span onclick="rad('news',1,7);">
            <div class="OrangeBall"></div><span class="new"> </span>&nbsp;&nbsp;{{ $ns->name }} 
        </span>
        @endforeach
{{--
        <span onclick="rad('news',1,6);">
            <div class="OrangeBall"></div>sdsa
        </span>
        <span onclick="rad('news',1,5);">
            <div class="OrangeBall"></div>abc
        </span>
        <span onclick="rad('news',1,4);">
            <div class="OrangeBall"></div>COVID NEWS
        </span>
        <span onclick="rad('news',1,3);">
            <div class="OrangeBall"></div>Deepika living a lime green life for Day 2 at Cannes
        </span>
        <span onclick="rad('news',1,2);">
            <div class="OrangeBall"></div>Will green card turn into 'Build America' visa?
        </span>
        <span onclick="rad('news',1,1);">
            <div class="OrangeBall"></div>Cong dismantled idea of Narendra Modi: Rahul
        </span> --}}
    </marquee>

</div>
<style>
    .marquee:hover{
        
        cursor: pointer;
    }
</style>
<script>

</script>
