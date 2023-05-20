@extends('layouts/dashboard')
@section('main')

            <div class="page-content">
                <h3>Quizz</h3>
                <div class="col-sm-12 col-lg-10  justify-content-center mb-3">
                    <button type="submit"
                        class="btn btn-primary mx-2 add-multiple"><span>&#43;</span> Multiple Choice</button>
                    <button type="submit"
                        class="btn btn-primary mx-2 add-single"><span>&#43;</span> Single Choice</button>
                    <button type="submit"
                        class="btn btn-primary mx-2 add-short-question"><span>&#43;</span> Short Question</button>
                    <button type="submit"
                        class="btn btn-primary mx-2 add-long-question"><span>&#43;</span> Long Question</button>
                </div>
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body ">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Quiz Title</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="fname" placeholder="Tilte">
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="feilds">

                            </div>
                            {{-- <div class="short-answer">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal ">
                                            <div class="form-body ">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Question</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="QuizTitle" class="form-control mb-2"
                                                            name="QuizTitle" placeholder="Question">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div> --}}

                        {{-- <div class="multiple">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Question</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control mb-2"
                                                            name="" placeholder="Question">
                                                            <a href="" class="bg-primary rounded px-2 text-white remove_multiple">Remove</a>
                                                    </div>
                                                    <div><hr></div>
                                                    <div class="col-md-2">
                                                        <label>Choice</label>
                                                        
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control mb-2"
                                                            name="fname" placeholder="Choice">
                                                            <a href="" class="bg-primary rounded px-2 text-white remove_choice">Remove</a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Choice</label>
                                                        
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control mb-2"
                                                            name="fname" placeholder="Choice">
                                                            <a href="" class="bg-primary rounded px-2 text-white remove_choice">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            <div class="col-sm-12 d-flex justify-content-start mb-3">
                                <button type="submit"
                                    class="btn btn-primary me-1 mb-1">Save </button>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

</script>
<script>
    //Add Input Fields
    $(document).ready(function() {
        var max_fields = 100; //Maximum allowed input fields 
        var wrapper    = $(".feilds"); //Input fields wrapper
        var multiple    = $(".multiple"); //Input fields wrapper
        var add_button = $(".add-short-question"); //Add button class or ID
        var add_button_long = $(".add-long-question"); //Add button class or ID
        var add_button_multiple = $(".add-multiple"); //Add button class or ID
        var add_button_single = $(".add-single"); //Add button class or ID

        

        var x = 1; //Initial input field is set to 1
        
        //When user click on add input button
        $(add_button).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append('<div class="card"><div class="card-content"><div class="card-body"><form class="form form-horizontal "><div class="form-body "><div class="row"><div class="col-md-2"><label>Question</label></div><div class="col-md-10 form-group"><input type="text" id="short" class="form-control mb-2"name="short" placeholder="Question"><a href="" class="bg-primary rounded text-white px-2 remove_feild">Remove</a></div></div></div></form></div></div></div>');

            }
        });
        $(add_button_long).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append('                            <div class="row"><div class="col"><div class="card"><div class="card-body"><div class="form-group mb-3"><label for="long" class="form-label">Question</label><textarea class="form-control" id="long"name="long"></textarea></div></div></div></div></div>');

            }
        });
        $(add_button_multiple).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append('                            <div class="card"><div class="card-content"><div class="card-body"><form class="form form-horizontal"><div class="form-body"><div class="row"> <div class="col-md-2"><label>Question</label></div><div class="col-md-10 form-group"> <input type="text" id="first-name" class="form-control" name="fname" placeholder="Question"></div><div><hr></div><div class="col-md-2"> <label>Choice</label></div><div class="col-md-10 form-group"><input type="text" id="first-name" class="form-control" name="fname" placeholder="Choice"></div><div class="col-md-2"><label>Choice</label></div><div class="col-md-10 form-group"><input type="text" id="first-name" class="form-control"name="fname" placeholder="Choice"></div><div class="col-md-2"><label>Choice</label></div><div class="col-md-10 form-group"><input type="text" id="first-name" class="form-control"name="fname" placeholder="Choice"></div><div class="col-md-2"><label>Choice</label></div><div class="col-md-10 form-group"><input type="text" id="first-name" class="form-control" name="fname" placeholder="Choice"></div></div></div></form></div></div></div>');

            }
        });
        
        $(add_button_single).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append('                            <div class="card"><div class="card-content"><div class="card-body"><form class="form form-horizontal"><div class="form-body"><div class="row"><div class="col-md-2"><label>Question</label></div><div class="col-md-10 form-group"><input type="text" id="first-name" class="form-control mb-2"name="" placeholder="Question"><a href="" class="bg-primary rounded px-2 text-white remove_multiple">Remove</a></div><div><hr></div><div class="col-md-2"><label>Choice</label>    </div><div class="col-md-10 form-group"><input type="text" id="first-name" class="form-control mb-2"name="fname" placeholder="Choice"><a href="" class="bg-primary rounded px-2 text-white remove_choice">Remove</a></div><div class="col-md-2"><label>Choice</label></div><div class="col-md-10 form-group"><input type="text" id="first-name" class="form-control mb-2"name="fname" placeholder="Choice"><a href="" class="bg-primary rounded px-2 text-white remove_choice">Remove</a></div> </div></div></form></div></div></div>');

            }
        });
        
        //when user click on remove button
        $(wrapper).on("click",".remove_multiple", function(e){ 
            e.preventDefault();
            $(this).parent('div').remove(); //remove inout field
            x--; //inout field decrement
        })
        $(multiple).on("click",".remove_multiple", function(e){ 
            e.preventDefault();
            $(this).parent('div').remove(); //remove inout field
            x--; //inout field decrement
        })
    });
    </script>
@endsection