<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Details</title>
    <style>
        body {
            margin: 20px;
            padding: 0;
            overflow-x: auto;
        }

        h1 {
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border: 1px solid #ddd;
            page-break-inside: auto;
        }

        thead {
            background-color: #f7f7f7;
            color: rgb(26, 26, 26);
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #000000;
            word-wrap: break-word;
            font-size: 10px;
            font-family: monospace;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .total-row {
            background-color: #f8f9fa;
        }

        .total-row td {
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
            /* Centers horizontally */
            align-items: center;
            /* Centers vertically */
            height: 300px;
            /* You can adjust this if needed */
            width: 100%;
        }

        .dataOne,
        .dataTwo {
            margin-top: 30px;
            /* Optional: adds some space between the two items */
            text-align: center;
            /* Centers text inside the containers */
        }

        /* Optional: If you want to adjust widths and ensure the items fit well */
        .dataOne,
        .dataTwo {
            width: 200px;
            /* Fixed width, adjust as needed */
        }


        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            table {
                font-size: 8px;
            }

            th,
            td {
                padding: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ $img }}" alt="" style="width:100%; height:auto; margin-bottom:10px;">
        </div>
        <span>স্মারক নং- LKSS-HRC/LGCRRP/চুক্তি-২৫৭/২০২৩/এডভাইস নং - ১৩৫ </span> <br>
        <span>প্রতি</span> <br>
        <span>ব্যবস্থাপক</span> <br>
        <span>জনতা ব্যাংক লিমিটেড</span> <br>
        <span> বেগম রোকেয়া স্মরণী শাখা</span> <br>
        <span> ঢাকা ।</span> <br> <br>
        <span> বিষয়: টি,টি/এম, টি এর মাধ্যমে অর্থ স্থানান্তরের এডভাইস প্রদান প্রসঙ্গে।</span> <br>

        <div class="con">
            <p>
                এলকেএসএস-এইচআরসি শিরোনামে তার ব্যাংক শাখায় পরিচালিত চলতি হিসাব নম্বর - ০১০০০২৪৮৮৩৬২৭ থেকে লোকাল
                গভর্নমেন্ট
                কোভিড-১৯ রেসপন্স এন্ড রিকভারি প্রজেক্ট (এলজিসিআরআরপি) প্রকল্পের আওতায় আউটসোর্সিং এর মাধ্যমে নিয়োগ
                প্রাপ্ত
                নিম্নে বর্ণিত ০৬-জন কর্মকর্তা/কর্মচারীদের জুলাই/২০২৪ইং মাসের বেতন-ভাতা বাবদ মোট = ১,৬২,০৭৮.০০ (এক লক্ষ
                বাষট্টি হাজার আটাত্তর টাকা মাত্র।) সংশ্লিষ্ট কর্মকর্তা/কর্মচারীদের স্ব স্ব ব্যাংক হিসেবে স্থানান্তর করার
                জন্য অনুরোধ করা হলো
            </p>
        </div>

        <table class="table">
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
            <tbody class="body">
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->employeeData->EmployeeName }}</td>
                        <td>{{ $item->employeeData->PhoneNumber }}</td>
                        <td>{{ $item->employeeData->NidNumber }}</td>
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td>
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td>
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td>
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td>
                        <td>{{ number_format($item->actualSalary, 2) }} BDT</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <td colspan="8" style="text-align: end;"><strong>Total Salary:</strong></td>
                    <td colspan="1" style="text-align: center;">{{ number_format($totalSalary, 2) }} BDT</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <style>
        .not tr td {
            border: none;
        }
    </style>

    <div class="row" style="text-align: center; width: 100%;">
        <table style="width: 100%;" class="not">
            <tr>
                <td style="width: 50%; text-align: center;  ">
                    <br><br><br>
                    <div class="dataOne">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </td>
                <td style="width: 50%; text-align: center; ">
                    <br><br><br>
                    <div class="dataTwo">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>
