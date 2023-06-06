<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Ajax Autocomplete Dynamic Search with select2</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <style>
        h2 {
            color: rgb(197, 62, 62);
        }

    </style>
</head>

<body class=" ">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h2>All Old Post</h2>
            </div>
            <div class="col-md-8 mt-5 offset-2">
                <select id="postsearch" data-url="{{ route('oldpost') }}"
                name="livesearch" onchange="GetPost()"
                    class="livesearch form-control p-3">
                    <option value="">Please select</option>
                    @foreach ($postTitles as $Post_title)
                        <option value="{{ $Post_title->post_title }}">{{ $Post_title->post_title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
<div id="postPanel">
            @forelse ($posts as $post)
            {{ $post->post_content }}
            @empty
        No Record Found
            @endforelse
        </div>


</body>

<script>
    //$('.livesearch').select2();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function GetPost() {
        var livesearch = $("#postsearch").val(); //"About";//

        var url = $("#postsearch").data('url');
 // alert(url);
        $.ajax({
            url: url,
            type: "get",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: {
                'livesearch': livesearch
            },
            success: function(msg) {
               // console.log(msg + data);
                //alert(data);
                if (!msg.error) {
                    $("#postPanel").html(msg['html']);
                    // $("#rems-popup").modal('show');
                } else {

                }

            },
            error: function(xhr, status, error) {
                $("#include_list").html(status + ": " + error);
                // alert(xhr);
                //  console.log(xhr);

            }

        })
    }



    // document.getElementById("livesearch").select2();
    // $('.livesearch').select2({
    //     placeholder: 'Select post_title',
    //     ajax: {
    //         url: '/oldpost',
    //         dataType: 'json',
    //         delay: 250,
    //         processResults: function (data) {
    //             return {
    //                 results: $.map(data, function (item) {
    //                     return {
    //                         text: item.post,
    //                         id: item.id
    //                     }
    //                 })
    //             };
    //         },
    //         cache: true
    //     }
    // });
</script>
