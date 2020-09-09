@extends('Layout/main')

@section('title', 'Halaman Utama')

@section('container')
 <div class="container">
    <div class="row">
        <div class="col-10">
            <h5 class="mt-3">Menu Makanan Cafe Meow</h5>
            <br>
            <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Food</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Cloud Bread</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Garlic Bread</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Tiramisu Cake</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Banana Chocolatte</td>
                <td>10k</td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>Red Velvet</td>
                <td>20k</td>
                </tr>
                <tr>
                <th scope="row">6</th>
                <td>Kentang Goreng</td>
                <td>8k</td>
                </tr>
                <tr>
                <th scope="row">7</th>
                <td>Salad Buah</td>
                <td>25k</td>
                </tr>
                <tr>
                <th scope="row">8</th>
                <td>Nasi Goreng</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">9</th>
                <td>Mie Goreng</td>
                <td>12k</td>
                </tr>
                <tr>
                <th scope="row">10</th>
                <td>Spageti</td>
                <td>15k</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
 </div>   
@endsection

    