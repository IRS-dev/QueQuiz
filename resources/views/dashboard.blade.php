@extends('layouts.dashboard')
@section('main')
<section class="section">
    <div class="card">
        <div class="card-header">
            Quiz List
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible show fade">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            @endif
        </div>

        <div class="card-body">
            <div class="col-sm-6 col-lg-8 d-flex justify-content-start">
                <a href="/quiz/create"
                    class="btn btn-primary  mb-3 mx-2">Create Quiz</a>
                <a href="/quiz/export"
                    class="btn btn-secondary  mb-3 mx-2">Export</a>
            </div>

            @if ($quizs != null)
           
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Quiz</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quizs as $quiz)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$quiz->name}}</td>
                        <td>
                            <a href="/dashboard/user/id" class="btn icon icon-left btn-dark"><i class="bi bi-pencil-square"></i></a>
                            <a href="/dashboard/user/id" class="btn icon icon-left btn-primary"><i class="bi bi-eye-fill"></i></a>
                            <a href="/dashboard/user/id" class="btn icon icon-left btn-danger" ><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="col-lg-2 mx-auto">
                <img class="img-thumbnail"style="opacity:40%;border:none;background:none;width:100px; height:auto;"  src="../../landingpage/img/doesn't.png">
                
            </div>
            <div>
                <p class="col-lg-3 mx-auto text-center">You don't have quiz yet</p>
            </div>
            @endif
        </div>
    </div>

</section>
@endsection

@section('script')
<script src="../../admin/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="../../admin/assets/js/main.js"></script>
@endsection