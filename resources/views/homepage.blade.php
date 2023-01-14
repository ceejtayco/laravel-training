@extends('layouts.welcome')
@section('body')
<div class="container justify-content-center">
    <div class="mt-4 card">
        <div class="card-body bg-white">
            <form>
                <div class="row">
                    <div class="col-sm">
                        <label>ID</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
                    </div>
                    <div class="col-sm">
                        <label>DESCRIPTION</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label>STATUS</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>PENDING</option>
                            <option>COMPLETED</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label>ASSIGNEE</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Assignee">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label>CREATED AT</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
                    </div>
                    <div class="col-sm">
                        <label>UPDATED AT</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
                    </div>
                </div>

                <div class="mt-2 row">
                    <div class="col-sm text-right">
                        <button type="button" class="btn btn-success">CREATE</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
