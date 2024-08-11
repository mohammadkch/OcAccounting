@extends('layouts.panel')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>لیست کاربران</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">درون ریزی</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">برون بری</a>
                                    </li>
                                    <li>
                                        <a class="btn btn-solid" href="{{ route('ocaccounts.create') }}">افزودن کاربر جدید</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table all-package theme-table table-product" id="table_id">
                                    <thead>
                                    <tr>
{{--                                        <th>تصویر محصول</th>--}}
                                        <th>یوزرنیم</th>
                                        <th>ماه</th>
                                        <th>روز</th>
                                        <th>پایان خودکار</th>
                                        <th>وضعیت پرداخت</th>
                                        <th>تاریخ ایجاد</th>
                                        <th>تاریخ بروزرسانی</th>
                                        <th>ویرایش</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach ($oc_accounts as $account)

                                        <tr>
{{--                                            <td>--}}
{{--                                                <div class="table-image">--}}
{{--                                                    <img src="{{ Storage::url($account->main_image) }}"--}}
{{--                                                         alt="{{ $account->title }}" class="img-fluid">--}}
{{--                                                </div>--}}
{{--                                            </td>--}}

                                            <td>{{ $account->username }}</td>
                                            <td>{{ $account->month }}</td>

                                            <td>{{ $account->day }}</td>
                                            <td style="color: {{$account->auto_revoke == 1 ? 'red' : 'green'}}">{!! $account->auto_revoke == 1 ? "<b>بله</b>" : 'خیر' !!}</td>
                                            <td style="color: {{$account->is_paid == 1 ? 'green' : 'red'}}">{!! $account->is_paid == 1 ? 'بله' : "<b>خیر</b>" !!}</td>
                                            <td>{{ \Morilog\Jalali\Jalalian::forge($account->created_at) }}</td>
                                            <td>{{ $account->updated_at ? \Morilog\Jalali\Jalalian::forge($account->updated_at) : null}}</td>

                                            {{--                                    <td>12</td>--}}

                                            {{--                                    <td class="td-price">95000 تومان</td>--}}

                                            {{--                                    <td class="status-danger">--}}
                                            {{--                                        <span>در انتظار</span>--}}
                                            {{--                                    </td>--}}

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('ocaccounts.edit', $account->id) }}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
