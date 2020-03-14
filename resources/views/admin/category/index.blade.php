@extends('layouts.admin')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
<div class="card-body p-0">
      <div class="container">
        <div class="row">
		 <div class="col-md-12">
<a class="btn btn-primary btn-sm" href="#">Add New category</a>
		</div>
		</div>
	</div>
						  
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 20%">
                          ID
                      </th>
                      <th style="width: 20%">
                          Category Name
                      </th>
                      <th style="width: 30%">
                          Category Description
                      </th>
                      <th>
                          Slug
                      </th>
                      <th style="width: 30%;text-align:center;">
					  Action
                      </th>
                  </tr>
              </thead>
              <tbody>
			  @foreach ($categories as $category)
                  <tr>
                      <td> {{$category->id}}   </td>
                      <td> {{$category->name}} </td>
                      <td> {{str_limit($category->description, 80)}} </td>
                      <td> {{$category->slug}} </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  @endforeach
			  </tbody>
          </table>
        </div>

@endsection
