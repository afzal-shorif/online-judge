@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">{{$category_title}}</h3>
                <div class="table-responsive">
                    <table class="table text-left">
                        <thead>
                        <tr>
                            <th class="border-0">Problem ID</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Title</th>
                            <th class="border-0">Solved/Tried</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($problems as $problem)
                        <tr>
                            <td>{{$problem->id}}</td>
                            <td>@if($problem->verdict == null)
                                    <i class="fa fa-check"></i>
                                @elseif($problem->verdict < 3)
                                <i class="fa fa-times text-danger"></i>
                                @else <i class="fa fa-check text-success"></i>
                                @endif
                            </td>
                            <td><a href="{{url('practice/'.$category_id.'/'.$problem->id)}}" class="text-decoration-none">{{$problem->title}}</a></td>
                            <td>{{$problem->total_solve}} / {{$problem->total_sub}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center pt-5">
                {{ $problems->links() }}
            </div>
        </div>
    </div>
@endsection
