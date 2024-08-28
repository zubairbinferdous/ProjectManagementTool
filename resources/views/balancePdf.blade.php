<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Details</title>
    <style>
        body {
            font-family: 'Arial, Helvetica, sans-serif';
            margin: 20px;
        }

        .container {
            width: 95%;
            margin: 0 auto;
            padding: 20px;

        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tfoot tr {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        .text-right {
            text-align: right;
        }

        .header {
            text-align: center
        }

        .header img {
            width: 80%;
            height: 130px;

        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .last {
            display: flex;
            justify-content: space-around;
        }

        .data-one {
            width: 30%;
            border: 2px soild black;
            padding-top: 100px;
        }

        .data-two {
            width: 30%;
            border: 2px soild black;
            padding-top: 100px;
        }

        .data-one p {
            text-align: center;
            font-size: 10px;
        }

        .data-two p {
            text-align: center;
            font-size: 10px;
        }

        th,
        td {
            padding: 5px;
            font-size: 14px;
            text-align: left;
        }

        th {
            background-color: #ffffff;
            color: #333;
        }

        .top-left-sign p {
            font-size: 10px;
        }
    </style>
</head>

<body>
    <form>
        <button type="submit">hello</button>
    </form>
    <div class="container">

        <div class="header">
            <img src="{{ asset('assets/img/products/lkskCapture.PNG') }}" alt="" class="">
        </div>
        <div class="top-left">
            <p>প্রতি</p>
            <p>ব্যবস্থাপক</p>
            <p>জনতা ব্যাংক লিমিটেড</p>
            <p>বেগম রোকেয়া সরণী</p>
            <p>শাখা ঢাকা</p>

            <span>বিষয় : টিটিএম টি মাধ্যমে অর্থ অ্যাডভাইস প্রদান করা হবে স্থানান্তরের</span>
        </div>


        <div class="center">
            <div class="center-data">
                <p>এল কে আছিস এইচআরসি শিরোনামের তার ব্যাংক শাখার পরিচালিত চলতি হিসাব নাম্বার থেকে লোকাল গভমেন্ট কোভিড ১৯
                    <br>
                    রেসপন্স এন্ড রিকভারি প্রজেক্ট প্রকল্পের আয়তায় আউটসোর্সিং এর মাধ্যমে নিয়োগপ্রাপ্ত ছয় জন কর্মকর্তা
                    ও
                    <br>
                    {{-- কর্মচারী 2024 মাসের বেতন ভাতার মোট সংখ্যা {{ $totalSalary }} --}}
                </p>
            </div>
        </div>


        <table>
            <thead>
                <tr>
                    <th>কর্মচারীর নাম</th>
                    <th>পদবী </th>
                    <th>কর্মস্থল</th>
                    <th>হিসাব রক্ষক </th>
                    <th>অংক </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->employeeData->EmployeeName }}</td>
                        <td>{{ $item->employeeData->PhoneNumber }}</td>
                        <td>{{ $item->employeeData->NidNumber }}</td>
                        <td>{{ $item->employeeData->Account }}</td>
                        <td>{{ $item->actualSalary }}</td>
                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right"><strong></strong></td>
                    {{-- <td>{{ $totalSalary }}</td> --}}
                </tr>
            </tfoot>
        </table>

        <div class="top-left-sign">
            <p>মোঃ নুরুল ইসলাম</p>
            <p> ব্যবস্থাপক </p>
            <p>এল কেস এসএস এইচআরসি</p>
        </div>

        <div class="top-left-sign">
            <p>মোঃ বেলাল </p>
            <p> ব্যবস্থাপক পরিচালক </p>
            <p>এল কে এস এস লি:</p>
        </div>
    </div>


</body>

</html>
