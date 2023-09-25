<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Invoice</h4>
            </div>
            <div class="card-body">
                <!-- Display the Invoice Status -->
                <div class="mb-3">
                    <strong>Status:</strong> {{ $invoiceStatus }}
                </div>
                
                @if($invoiceStatus !== 'paid')
                    <!-- If the invoice is not paid, display the link to the hosted invoice URL -->
                    <div class="mb-3">
                        <a href="{{ $hostedInvoiceUrl }}" target="_blank" class="btn btn-primary">Pay Invoice</a>
                    </div>
                @endif
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div><strong>{{ config('app.name') }}</strong></div>
                        <div>46 Howard St 6th fl,<br>New York, NY 10013</div>
                        <div>Email: support@whippdigital.com</div>
                        <div>Phone: +1 212-951-0651 </div>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div><strong>{{ $user->name ?? '-' }}</strong></div>
                        <div>Email: {{ $user->email }}</div>
                    </div>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left">{{ $data['product']->name }}</td>
                                <td class="left">{{ $data['product']->description }}</td>
                                <td class="right">${{ number_format($data['price']->unit_amount / 100, 2) }}</td>
                                <td class="center">1</td>
                                <td class="right">${{ number_format($data['price']->unit_amount / 100, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5"></div>
                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left"><strong>Total</strong></td>
                                    <td class="right"><strong>${{ number_format($data['price']->unit_amount / 100, 2) }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
