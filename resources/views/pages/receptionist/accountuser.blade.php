@extends('pages.receptionist.receptionist')

<style>
    span.status {
        color: #fff;
        padding: 5px 10px;
        border-radius: 40px;
        min-width: 85px;
    }

    .status.cancel {
        background-color: orange;
    }

    .status.confirm {
        background-color: green;
    }

    .status.pending {
        background-color: blue;
    }

    .status.finish {
        background-color: black;
    }

    .status.checkin {
        background-color: crimson;
    }

    .btn_filter {
        background: var(--main-gradient);
        color: #fff;
        padding: 8px 20px;
    }

    .filter_booking form {
        position: relative;
    }

    .filter_booking input {
        width: 100%;
        padding: 8px 15px;
        outline: none;
    }

    .btn_search_booking {
        position: absolute;
        top: 15px;
        right: 20px;
    }

    .text {
        font-size: 13px;
    }
</style>

@section('content')
<div class="col-lg-9">
    <div class="overflow-auto">
        <div class="card common-card min-w-maxContent">
            <div class="card-header">
                <h6 class="title mb-0">List Account User </h6>
            </div>
            <div class="card-body">
                <table class="table style-two">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Adress</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    {{-- <div class="cart-item__thumb">
                                                            <img src="assets/images/thumbs/property-1.png" alt="">
                                                        </div> --}}
                                    <div class="cart-item__content">
                                        <h6 class="cart-item__title fw-500 font-18"> <a href="property.html" class="link">3 Rooms
                                                Manhattan</a></h6>
                                        
                                    </div>
                                </div>
                            </td>
                            <td>
                                hsadad
                            </td>

                            <td>
                                <h6 class="cart-item__totalPrice font-16 fw-500 mb-0">$75.00</h6>
                            </td>
                            <td>

                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="rounded-btn edit-btn  text-primary bg-primary bg-opacity-10 flex-shrink-0"><i class="fa-sharp fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="rounded-btn delete-btn  text-danger bg-danger bg-opacity-10 flex-shrink-0"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal
                                        title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save
                                        changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </table>
            </div>
        </div>
        </section>
        @endsection