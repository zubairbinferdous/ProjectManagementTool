<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Details</title>
    <style>
        body {
            /* font-family: 'NotoSansBangla', sans-serif; */
            /* Use your Bangla font */
            margin: 20px;
            padding: 0;
            overflow-x: auto;
            /* Allow horizontal scrolling for small screens */
        }

        h1 {
            text-align: center;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border: 1px solid #ddd;
            page-break-inside: auto;
            /* Allow breaking inside table */
        }

        thead {
            background-color: #f7f7f7;
            /* Dark background for the header */
            color: rgb(26, 26, 26);
            /* White text for header */
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #000000;
            word-wrap: break-word;
            font-size: 10px;
            /* Allow breaking long text */
        }

        tbody tr:hover {
            background-color: #f1f1f1;
            /* Light gray on hover */
        }

        .total-row {
            /* font-weight: bold; */
            background-color: #f8f9fa;
            /* Light background for total row */
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            table {
                font-size: 8px;
                /* Adjust font size for small screens */
            }

            th,
            td {
                padding: 5px;
                /* Reduce padding for smaller screens */
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">

            <img src="{{ $img }}" alt="" style="width:100%; height:auto; margin-bottom:30px;">
        </div>

        <h1>আমি তোমায় ভালোবাসি </h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>NID</th>
                    <th>Paid Salary</th>
                    <th>Paid Salary</th>
                    <th>Paid Salary</th>
                    <th>Paid Salary</th>
                    <th>Paid Salary</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td> <!-- Start numbering from 1 -->
                        <td>{{ $item->employeeData->EmployeeName }}</td>
                        <td>{{ $item->employeeData->PhoneNumber }}</td>
                        <td>{{ $item->employeeData->NidNumber }}</td>
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td> <!-- Format salary and add currency -->
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td> <!-- Format salary and add currency -->
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td> <!-- Format salary and add currency -->
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td> <!-- Format salary and add currency -->
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td> <!-- Format salary and add currency -->
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <td colspan="8" style="text-align: right;"><strong>Total Salary:</strong></td>
                    <td colspan="1">{{ number_format($totalSalary, 2) }} BDT</td> <!-- Format total salary -->
                </tr>
            </tfoot>
        </table>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus eligendi commodi corrupti ratione, aspernatur
            amet quam, unde assumenda consequuntur earum, iure velit. Odit illum qui accusantium asperiores sint. Sit,
            tenetur?</p>
    </div>


</body>

</html>
