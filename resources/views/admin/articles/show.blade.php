@extends('admin.layouts.master')
@section('title','تفاصيل المقال')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="pt-3 mb-0"> تفاصيل المقالة</h4>
      <div class="card g-3 mt-5">
        <div class="card-body row g-3">
          <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">
              <div class="me-1">
                <h5 class="mb-1"></h5>
              </div>

            </div>
            <div class="card academy-content shadow-none ">
              <div class="p-2">
                <div class="cursor-pointer">
              <!-- img -->
              <img src="{{asset('articles/'. $article->img)}}" alt="">
                </div>
              </div>
              <div class="card-body">
                <h5 class="mb-2">عنوان المقال </h5>
                <p class="mb-0 pt-1">
                    {{ $article->title }}
                </p>
                <hr class="my-4" />
                <h5>القسم</h5>
                <hr class="my-4" />
                <div class="d-flex flex-wrap">
                  <div class="me-5">
                    <p class="text-nowrap">
                        <B>التاج</B>
                      <i class="ti ti-checks ti-sm me-2 mt-n2"></i>
                    </p>
                    <p class="text-nowrap"><i class="ti ti-file ti-sm me-2 mt-n2"></i>{{ $article->tags }}</p>
                  </div>
                </div>
                <hr class="mb-4 mt-2" />
                <h5>نص المقالة</h5>
                <p class="mb-4">
                   {{ $article->body }}
                </p>
                <hr class="my-4" />
                <h5>صاحب المقالة</h5>
                <div class="d-flex justify-content-start align-items-center user-name">
                  <div class="d-flex flex-column">
                    <span class="fw-medium">{{ $article->author }}</span>
                    <small class="text-muted">{{ $article->update_at }}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- / Content -->

    @endsection




