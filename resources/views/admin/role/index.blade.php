@extends('layouts.dashboard')
@section('main')
<section class="section">
    <div class="card">
        <div class="card-header">
            User Data
        </div>

        <div class="card-body">
            <div class="col-sm-6 col-lg-8 d-flex justify-content-start">
                <a href="/dashboard/role/create"
                    class="btn btn-primary  mb-3 mx-2">Add Roles</a>
                <a href="/dashboard/role/export"
                    class="btn btn-secondary  mb-3 mx-2">Export</a>
            </div>
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name Roles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>User</td>
                    </tr>
                </tbody>
            </table>
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