@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                    <div class="card-title">
                    <div class="d-flex align-items-center"> 
                        <h1> {{ $question->title }}</h1>
                        <div class="ml-auto">
                            <a href=" {{ route('questions.index') }} " class="btn btn-outline-secondary">Go Back!</a>

                        </div>
                    </div> 
                    <hr>

                    </div>

                       <div class="media">
                            <!--votes-->
                            <div class="d-flex flex-column vote-controls">
                                <a title="This question is useful" class="vote-up">
                                    <i class="fas fa-caret-up fa-3x"></i>
                                </a>    
                                <span class="votes-count">31232</span>
                                <a title="This question is not useful" class="vote-down off">
                                    <i class="fas fa-caret-down fa-3x"></i>
                                </a>

                                <a title="Mark as a favorite!" class="favorite pt-2 favorited">
                                    <i class="fas fa-star fa-2x"></i>
                                    <span class="favorites-count">12345</span>
                                </a>    
                            </div>

                           <div class="media-body">
                            
                               {!! $question->body_html !!}
                                    <div class="float-right">
                                        <span class="text-muted">Asked {{ $question->created_date }}</span>
                                        <div class="media pt-2">
                                            
                                            <a href="{{ $question->user->url }}" class="pr-2">
                                                <img src="{{  $question->user->avatar  }}">    
                                            </a>
                                            
                                            <div class="media-body pt-1">
                                                <a href="{{ $question->user->url }}" class="pr-2">
                                                    {{$question->user->name}}
                                                </a>   
                                            </div>

                                        </div>
                                    </div>
                           </div>
                       </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-4">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">

                        <h2>
                            {{ $question->answers_count . " " . str_plural('Answer', $question->answers_count) }}
                        </h2>
                        
                    </div>
                    <hr>

                        @foreach ($question->answers as $answer)
                            <div class="media">
                                <!--votes control-->
                                <div class="d-flex flex-column vote-controls">
                                <a title="This answer is useful" class="vote-up">
                                    <i class="fas fa-caret-up fa-3x"></i>
                                </a>    
                                <span class="votes-count">31232</span>
                                <a title="This answer is not useful" class="vote-down off">
                                    <i class="fas fa-caret-down fa-3x"></i>
                                </a>

                                <a title="Mark as best answer!" class="vote-accepted pt-2">
                                    <i class="fas fa-check fa-2x"></i>
                                </a>    
                                </div>


                                <div class="media-body">
                                    {!! $answer->body_html !!}

                                    <div class="float-right">
                                        <span class="text-muted">Answered {{ $answer->created_date }}</span>
                                        <div class="media pt-2">
                                            
                                            <a href="{{ $answer->user->url }}" class="pr-2">
                                                <img src="{{  $answer->user->avatar  }}">    
                                            </a>
                                            
                                            <div class="media-body pt-1">
                                                <a href="{{ $answer->user->url }}" class="pr-2">
                                                    {{$answer->user->name}}
                                                </a>   
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
