<style>
    @page{
        header: page-header;
        footer: page-footer;
        margin-top: 10px;
        margin-bottom: 100px;
    }
    .page-break {
        page-break-after: always;
    }
    body{
        font-family: Arial;
    }
    td {
        height: 25px;
    }
    th {
        font-weight: normal;
    }
</style>


    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Quotation</title>
        <style>
            /*@font-face {
                font-family: 'THSarabunNew';
                font-style: normal;
                font-weight: normal;
                src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
            }*/
            body {
                /*font-family: "THSarabunNew";*/
            }
            .table_css {
                height: 25px;
                /*font-family: "THSarabunNew";*/
                font-size: 13px;
                width: 100%;
            }
            .table_css td {
                height: 25px;
                /*font-family: "THSarabunNew";*/
                font-size: 13px;
            }
            .table_css th {
                font-weight: normal;
                /*font-family: "THSarabunNew";*/
                font-size: 13px;
            }
        </style>
    </head>
    <body lang="th">
        <htmlpageheader name="page-header">
        </htmlpageheader>

        <htmlpagebody>
            <div class="row" style="margin-top: 50px; width: 100%;">
                <table class="table_css">
                    <tr>
                        <td style="width: 50%;">
                            <img src="images/logo.png" alt="">
                        </td>
                        <td style="width: 50%; text-align: right;">
                            <div style="position; absolute; float: right; width: 100px; border: 1px solid red; border-radius: 5px;text-align: center; background-color: #00F;">
                                <h3 style="background-color: #00F; color: #FFF;">ใบเสนอราคา</h3>
                                <h3 style="background-color: #FFF; color: #00F;">Quotation</h3>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <table class="table_css">
                    <tr>
                        <td style="width: 50%;">
                            <h4 style="color: #00F;">เรียน / @user</h4>
                            <h4 style="color: #00F;">เรื่อง / @title</h4>
                            <h4>ทางบริษัทมีความยินดีขอเสนอราคาดังต่อไปนี้</h4>
                            <h4>ข้อมูล @email โทร. @tel</h4>
                        </td>
                        <td style="width: 50%; text-align:right;">
                            <h4 style="color: #00F;"> บริษัท @company_thai</h4>
                            <h4>@company_en</h4>
                            <h4>@address</h4>
                            <h4>@road @sub_district @district @province @zipcode</h4>
                            <h4>โทร/แฟกซ์ @tel, @fax</h4>
                            <h4>เล</h4>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <table class="table_css" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #000; font-weight: bold;">รายการ</th>
                            <th style="border: 1px solid #000; font-weight: bold;">รายละเอียด</th>
                            <th style="border: 1px solid #000; font-weight: bold;">จำนวน</th>
                            <th style="border: 1px solid #000; font-weight: bold;">ราคาต่อหน่วย</th>
                            <th style="border: 1px solid #000; font-weight: bold;">ราคารวม</th>
                        </tr>
                        <tr>
                            <th style="border: 1px solid #000; font-weight: bold;">ITEM</th>
                            <th style="border: 1px solid #000; font-weight: bold;">DESCRIPTION</th>
                            <th style="border: 1px solid #000; font-weight: bold;">QUANTITY</th>
                            <th style="border: 1px solid #000; font-weight: bold;">UNIT PRICE</th>
                            <th style="border: 1px solid #000; font-weight: bold;">AMOUNT</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </htmlpagebody>

        <htmlpagefooter name="page-footer">
            <div style="padding-bottom: 0px;text-align: center; font-size: 10px;">
                <!-- <div align="center"><b>{PAGENO} of {nbpg}</b></div> -->
            </div>
        </htmlpagefooter>
    </body>
