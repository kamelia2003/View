@extends('Layout/main')

@section('title', 'Halaman Utama')

@section('container')
 <div class="container">
    <div class="row">
        <div class="col-10">
            <h5 class="mt-3">Menu Minuman Cafe Meow</h5>
            <br>
            <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Drink</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Milk Shake</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Pink Mojito</td>
                <td>12k</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Blackcurrant Tea</td>
                <td>10k</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Strawberry Smoothie</td>
                <td>17k</td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>Manggo Smoothie</td>
                <td>17k</td>
                </tr>
                <tr>
                <th scope="row">6</th>
                <td>Coffee Latte</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">7</th>
                <td>Vanilla Latte</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">8</th>
                <td>Matcha Green Tea Latte</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">9</th>
                <td>Blue Mojito</td>
                <td>15k</td>
                </tr>
                <tr>
                <th scope="row">10</th>
                <td>Tropical Mojito</td>
                <td>15k</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
 </div>   
@endsection

    