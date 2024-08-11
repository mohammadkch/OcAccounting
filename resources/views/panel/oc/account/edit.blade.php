@extends('layouts.panel')
{{--@push('scripts')--}}


{{--@endpush--}}
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>ویرایش کاربر</h5>
                                </div>

                                <form action="{{ route('ocaccounts.update', ['ocaccount' => $x]) }}" method="POST"
                                      class="theme-form theme-form-2 mega-form">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">نام کاربری</label>
                                        <div class="col-sm-9">
                                            <input name="username"
                                                   class="form-control @error('username') is-invalid @enderror" type="text"
                                                   value="{{$x->username}}" placeholder="username">
                                            @error('username') <span style="color: red"> {{ $message }} </span> @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">ماه</label>
                                        <div class="col-sm-9">
                                            <input name="month" class="form-control @error('month') is-invalid @enderror"
                                                   type="number" value="{{$x->month}}" placeholder="1,2,3...">
                                            @error('month') <span style="color: red">{{ $message }}</span> @enderror

                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">روز</label>
                                        <div class="col-sm-9">
                                            <input name="day" class="form-control @error('day') is-invalid @enderror"
                                                   type="number" value="{{ $x->month }}" placeholder="1,2,3...">
                                            @error('day') <span style="color: red">{{ $message }}</span> @enderror

                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">تعداد ماه</label>
                                        <div class="col-sm-9">
                                            <input name="month_cnt" class="form-control @error('month_cnt') is-invalid @enderror"
                                                   type="number" value="{{ $x->month_cnt }}" placeholder="1,2,3...">
                                            @error('month_cnt') <span style="color: red">{{ $message }}</span> @enderror

                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">پایان خودکار</label>
                                        <div class="col-sm-9 radio-section">

                                            <label>
                                                <input type="radio" name="auto_revoke" value="1" {{ $x->auto_revoke == 1 ? 'checked' : ''}}>
                                                <i></i>
                                                <span>بله</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="auto_revoke" value="0" {{ $x->auto_revoke == 0 ? 'checked' : ''}}>
                                                <i></i>
                                                <span>خیر</span>
                                            </label>


                                            @error('auto_revoke') <span style="color: red">{{ $message }}</span> @enderror

                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">پرداخت شده؟</label>
                                        <div class="col-sm-9 radio-section">

                                            <label>
                                                <input type="radio" name="is_paid" value="1" {{ $x->is_paid == 1 ? 'checked' : ''}}>
                                                <i></i>
                                                <span>بله</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="is_paid" value="0" {{ $x->is_paid == 0 ? 'checked' : ''}}>
                                                <i></i>
                                                <span>خیر</span>
                                            </label>

                                            @error('is_paid') <span style="color: red">{{ $message }}</span> @enderror

                                        </div>
                                    </div>

                                    {{--                                    <div class="mb-4 row align-items-center">--}}
                                    {{--                                        <label--}}
                                    {{--                                                class="col-sm-3 col-form-label form-label-title">تگ ها</label>--}}
                                    {{--                                        <div class="col-sm-9">--}}
                                    {{--                                            <select multiple class="js-example-basic-multiple w-100" name="tags[]"--}}
                                    {{--                                                    id="tags">--}}
                                    {{--                                                @if(count($tags))--}}
                                    {{--                                                    @foreach($tags as $tag)--}}
                                    {{--                                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>--}}
                                    {{--                                                    @endforeach--}}
                                    {{--                                                @else--}}
                                    {{--                                                    <option disabled>تگی وجود ندارد</option>--}}
                                    {{--                                                @endif--}}
                                    {{--                                            </select>--}}
                                    {{--                                            @error('tags') <span style="color: red">{{ $message }}</span> @enderror--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}


                                    <div class="card">
                                        <div class="card-body">
                                            {{--                                        <div class="card-header-2">--}}
                                            {{--                                            <h5>توضیحات</h5>--}}
                                            {{--                                        </div>--}}

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <label class="form-label-title col-sm-3 mb-0">Description</label>
                                                        <div class="col-sm-9">
                                                            <textarea name="description" id="description"
                                                                      class="form-control"
                                                                      rows="3">{{ $x->description }}</textarea>
                                                            @error('description') <span
                                                                style="color: red">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <button class="btn btn-success w-100" type="submit">ثبت ویرایش</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


