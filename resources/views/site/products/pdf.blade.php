<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>products detailes </title>

    <style>
        body {
            font-family: 'XBRiyaz', sans-serif;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            font-size: 9px;
            line-height: 24px;
            font-family: 'XBRiyaz', sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: right;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td {
            text-align: left;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 30px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: 'XBRiyaz', sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td {
            text-align: right;
        }

        @page {
            header: page-header;
            footer: page-footer;
        }
    </style>
</head>

<body>
<div class="invoice-box ">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="6">
                <table>

                    <tr>
                        <td width="65%" class="title">
                            <img src="{{ asset('uploads/product_images/'.$image) }}" style="width:100px; max-width:100px;">
                        </td>

                        <td width="35%">
                       <p>the nap of product {{$name}}</p><br>
                              <p> the descriptions of product {!!  $description!!}</p><br>
                              <p>the price of product{{$sale_price}} $</p><br>
                            <p> created at {{	$created_at->format('Y-m-d')}}</p><br>
                           <p> the  date of sale : </p>    {{ Carbon\Carbon::now()->format('Y-m-d') }}<br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><h2></h2></td>
                    </tr>

                </table>
            </td>
        </tr>



    </table>
</div>
</body>
</html>
