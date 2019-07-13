@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All the Questions!</div>

                <div class="card-body">
                    
                    @foreach($questions as $question)

                        <div class="media">
                            <div class="media-body">

                                <h3 class="mt-0"> 
                                <a href=" {{ $question->url }} "> {{ $question->title }} 
                                </a> 
                                </h3>
                                
                                <p class="lead">
                                    Made by: 
                                    <a href=" {{ $question->user->url }} ">
                                     {{ $question->user->name }} 
                                    </a>
                                    <small class="text-muted">
                                      {{ $question->created_date }}  
                                    </small>
                                </p>

                                {{ str_limit($question->body,200) }}
                            </div>
                        </div>
                        <hr>

                    @endforeach
                    <div class="justify-content-center">
                    {{ $questions->links() }} <!--pagination-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
