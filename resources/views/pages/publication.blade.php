@extends('home')

@section('contents')
    <div style="margin-left:35px;">
        <div style="height:80px;background-color:f1f1f1;border-radius:30px;text-align:center;">
            <h4 style="padding-top:30px;font-family:roman;font-size:1.7em;">Publications</h4>
        </div>
        <br>
        <br>

        <style>
            td > h4 {
                /*text-align : center;*/
            }
            .table tr{
                height:60px;
                overflow:hidden;
            }

            #tbl{
                table-layout:fixed;
                overflow:hidden;
                border:1px #ccd9ff;
                width:100%;
                border-left:none;
                border-right:none;
            }


        </style>

    @foreach($publications as $publication)
        <?php
            $authors = DB::table('authors')->where('publication_id',$publication->id)->get();
        ?>
        <div style="border:1px solid black;">
            <div>
                <h5 style="margin-left:5px;"><strong>{{ $publication->publication_title }}</strong></h5>
                <table class="table table-responsive">
                    <tbody>
                    <tr>
                        <td>
                            <table class="table table-responsive">
                                <tbody>
                                <tr>
                                    <td rowspan="3"><h5>Authors:</h5></td>
                                    @foreach($authors as $author)
                                    <td><h5>{{ $author->author_name }}</h5></td>
                                    <td><h5>{{ $author->affiliation }}</h5></td>
                                </tr>
                                @endforeach
                                {{--<tr>--}}
                                    {{--<td>A. B. Barbadekar</td>--}}
                                    {{--<td>Dept of Computer Engg., Vishwakarma Institute of Technology, Pune, India</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>S. P. Patil</td>--}}
                                    {{--<td>Dept.of Electronics, A.D. COE, Ashta, Sangli, India</td>--}}
                                {{--</tr>--}}
                                </tbody>
                            </table>
                        </td>
                        <td align="center">
                            <a><img src="{{ URL::to('uploads/shared/publication'). '/' . $publication->path }}" style="height:100px;width:150px"></a>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div style="margin-left:5px;margin-top:-40px;">
                    <h5><strong>Published in Proceeding:</strong></h5>
                    <p align="justify">
                        {{ $publication->proceeding }}
                    </p>
                    <br>
                    <h5 style="margin-top:-10px;"><strong>Abstract</strong></h5>
                    <p aligh="justify">
                        {{ $publication->abstract }}
                    </p>
                </div>

                <div>
                    <button class="btn btn-info" style="margin:auto;display:block;">Read More</button>
                </div>
                <br>
            </div>
        </div>
            <br>
        @endforeach

        <hr style="border-color:a1a1a1;">
        <div style="margin-left:30%;display:block;">
            {{ $publications->links() }}
        </div>
</div>

@endsection