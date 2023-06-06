{{  "Search Result" }}
{{-- {{ $posts[0]['post_content'] }} --}}
{{-- {{ dd($posts) }} --}}
  @forelse ($posts as $post)
<div class="border border-secondary rounded mx-1 my-3 p-3">

    <div><em>Title: </em>{!!  $post->post_title !!}</div>
    <div><em>Date: </em>{!! \Carbon\Carbon::parse($post->post_date)->format('d-m-Y H:i:s')  !!}</div>
    <div><em>Type: </em>{!! $post->post_type !!}</div>
    <div><em>Status: </em>{!! $post->post_status !!}</div>
    <div>{!! $post->post_content !!}</div>



</div>
@empty

@endforelse
