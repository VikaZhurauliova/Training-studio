@extends('app')
@section('content')
    @if(count($user->wishlist) == 0)
        <section>
            <div class="container">
                <div class=" mb-5">
                    <div class="col-lg-6">
                        <h3>Your Wishlist is currently empty.</h3>
                    </div>
                    <div class="favourite-btn">
                        <a class="btn icon-left" href="{{ route('classes') }}"><span>Return To Classes</span></a>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section id="shop-wishlist">
            <div class="container">
                <div class="shop-cart">
                    <div class="table table-sm table-striped table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="cart-product-name">Class</th>
                                <th class="cart-product-price">Description</th>
                                <th class="cart-product-remove"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->wishlist as $class)
                                <tr>
                                    <td class="cart-product-thumbnail">
                                        <div class="cart-product-thumbnail-name">{{ $class->name }}</div>
                                    </td>
                                    <td class="cart-product-description">
                                        <p>{{ $class->description }}</p>
                                    </td>
                                    <td class="cart-product-remove">
                                        <form
                                            action="{{ route('account.favourite.delete', ['classes' => $class->id]) }}"
                                            method="POST">
                                            @csrf
                                            <a href="#" onclick="this.parentNode.submit()"><i
                                                    class="fa fa-times"></i></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
