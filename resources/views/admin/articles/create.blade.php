@extends('admin.layouts.master')
@section('title','اضافة مقال ')
@section('content')
<div class="col-md-12">
    <div class="container mt-5">
        <div class="row">
            @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

        <div class="card">
                <div class="card-header">
                    <h4>اضافة مقال
                        <a href="{{ route('articles.index') }}" class="btn btn-danger float-end">المقالات</a>
                    </h4>
                </div>
            <div class="card-body">
                    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">صورة المقال</label>
                                <input class="form-control" name="img" type="file" id="formFile">
                              </div>

                            <div class="mb-3">
                                <label for="">عنون المقال</label>
                                <input type="text" name="title" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="">صاحب المقال</label>
                                <input type="text" name="author" class="form-control" />
                            </div>

                            <div class="mb-3">
                                <label for="bodyarticle" class="form-label">نص المقالة </label>
                                <textarea class="form-control" id="bodyarticle" name="body" rows="3"></textarea>
                              </div>
                              <div class="col-md-6 mb-4">
                                <label for="TagifyCustomInlineSuggestion" class="form-label">اضافة تاج</label>
                                <input
                                  id="TagifyCustomInlineSuggestion"
                                  name="TagifyCustomInlineSuggestion"
                                  class="form-control"
                                  placeholder="select technologies"
                                  value="css, html, javascript" />
                              </div>
                              {{-- <div class="col-md-6 mb-4">
                                <label for="select2Primary" class="form-label">Primary</label>
                                <div class="select2-primary">
                                  <select id="select2Primary" class="select2 form-select" multiple>
                                    <option value="1" selected>Option1</option>
                                    <option value="2" selected>Option2</option>
                                    <option value="3">Option3</option>
                                    <option value="4">Option4</option>
                                  </select>
                                </div>
                              </div> --}}

                            {{-- <div class="mb-3">
                                <label for="">tags</label>
                                <input type="text" name="tags" class="form-control" />
                            </div> --}}

                            {{-- <div class="mb-3">
                            <label for="">الاقسام</label>
                            <select name="sections[]" class="form-control" multiple>
                                    <option value="">اختار القسم</option>
                                    @foreach ($sections as $section)
                                    <option value="{{ $section }}">{{ $section }}</option>
                                    @endforeach
                            </select>
                            </div> --}}

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>

                    </form>
            </div><!-- card body -->
         </div><!-- card -->
      </div><!-- row -->
    </div><!-- container -->
</div><!-- col-md-12 -->
@endsection
