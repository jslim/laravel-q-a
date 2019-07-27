 <?php //The _ at the begining of the name is to explain that is part-file (it needs to be included in other file)
  ?>

 @csrf
                        <div class="form-group">
                            
                            <label for="question-title">Question Title</label>
                            <input type="text" 
                                    name="title" 
                                    id="question-title" 
                                    value="{{ old('title', $question->title) }}"
                                    class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">

                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{  $errors->first('title') }}</strong>
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            
                            <label for="question-body">What is your question?</label>
                            <textarea name="body" 
                                      id="question-body" 
                                      rows="8" 
                                      class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">
                                          
                                 {{ old('body', $question->body) }} 
                             </textarea>
                        
                             @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{  $errors->first('body') }}</strong>
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            
                            <button type="submit" class="btn btn-success btn-lg">{{ $buttonText }}</button>

                        </div>