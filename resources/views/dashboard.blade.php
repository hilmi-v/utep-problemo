<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard</title>
</head>

<body>
    <x-sidebar></x-sidebar>

    <div class="parent">

        <div class="div1"> </div>


        <!-- navbar -->
        <div class="div2">
            <h1>Seventeen App</h1>
        </div>
        <!-- navbar -->

        <div class="div3">

            <div class="card">
                <div class="card-details">
                    <p class="text-title">Card title</p>
                    <p class="text-body">Here are the details of the card</p>
                </div>
                <button class="card-button">More info</button>
            </div>

            <div class="card">
                <div class="card-details">
                    <p class="text-title">Card title</p>
                    <p class="text-body">Here are the details of the card</p>
                </div>
                <button class="card-button">More info</button>
            </div>

            <div class="card">
                <div class="card-details">
                    <p class="text-title">Card title</p>
                    <p class="text-body">Here are the details of the card</p>
                </div>
                <button class="card-button">More info</button>
            </div>

            <div class="card">
                <div class="card-details">
                    <p class="text-title">Card title</p>
                    <p class="text-body">Here are the details of the card</p>
                </div>
                <button class="card-button">More info</button>
            </div>
        </div>



        <div class="div4">

            <div class="table-container">
                <div class="title">All History :</div>
                <table>
                    <tr>
                        <th>#</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Tanggal Pembelian</th>
                        <th>Jumlah</th>
                        <th>Uang Masuk</th>
                        <th>action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Qwerty</td>
                        <td>450.000 Rp</td>
                        <td>17/04/2025</td>
                        <td>1</td>
                        <td>450.000</td>
                        <td>
                            <a href=""><button class="edit"> Edit </button></a>
                            <button> Delete </button>

                        </td>
                    </tr>
                </table>

            </div>
        </div>

</body>

</html>
