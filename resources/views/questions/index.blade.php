@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">
                    <div class="d-flex align-items-center"> 
                        <h2>All the Questions!</h2>
                        <div class="ml-auto">
                            <a href=" {{ route('questions.create') }} " class="btn btn-outline-success">Ask a question!</a>

                        </div>
                    </div> 

                </div>

                <div class="card-body">
                    
                    @foreach($questions as $question)

                        <div class="media">

                            <div class="d-flex flex-column counter">
                                <div class="vote">
                                    <strong> {{ $question->votes }} </strong> {{ str_plural('vote', $question->votes) }}
                                </div> <!--depending on the quantity of votes, it will be vote or votes-->
                                
                                <div class="status {{ $question->status }}">
                                    <strong> {{ $question->answers }} </strong> {{ str_plural('answer', $question->answers) }}
                                </div> <!--depending on the quantity of votes, it will be answer or answers-->
                                
                                <div class="view">
                                    {{ $question->views ." ". str_plural('view', $question->views) }}
                                </div> <!--depending on the quantity of votes, it will be view or view-->
                                
                            </div>


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
