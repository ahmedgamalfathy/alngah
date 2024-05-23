@extends('admin.layouts.master')
@section('title','تحديث المقال')
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
                    <h4>تحديث مقال
                        <a href="{{ route('articles.index') }}" class="btn btn-danger float-end">المقالات</a>
                    </h4>
                </div>
            <div class="card-body">
                    <form action="{{ route('articles.update',$article) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">صورة المقال</label>
                                <input class="form-control" name="img" type="file" id="formFile" value="{{asset('articles'. $article->img)  }}">
                              </div>

                            <div class="mb-3">
                                <label for="">عنون المقال</label>
                                <input type="text" name="title" class="form-control" value="{{ $article->title }}" />
                            </div>

                            <div class="mb-3">
                                <label for="">صاحب المقال</label>
                                <input type="text" name="author" class="form-control" value="{{ $article->author }}"/>
                            </div>

                            <div class="mb-3">
                                <label for="bodyarticle" class="form-label">نص المقالة </label>
                                <textarea class="form-control" id="bodyarticle" name="body" rows="3">{{ $article->body }}</textarea>
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
{{--
                        <div class="mb-3">
                            <label for="">الاقسام</label>
                            <select name="sections[]" class="form-control" multiple>
                                    <option value="">اختار القسم</option>
                                    @foreach ($sections as $section)
                                    <option value="{{ $section }}">{{ $section }}</option>
                                    @endforeach
                            </select>
                            </div> --}}

                    <div class="mb-3">
                                <button type="submit" class="btn btn-primary">تحديث</button>
                            </div>

                    </form>
            </div><!-- card body -->
         </div><!-- card -->
      </div><!-- row -->
    </div><!-- container -->
</div><!-- col-md-12 -->
@endsection
