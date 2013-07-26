<? include('Functions.php'); ?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title>Family Finance</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        <script src="CustomJS.js"></script>
        <script src="jquery-maskmoney.js"></script>
        <link rel="stylesheet" type="text/css" href="Custom.css">
    </head> 
    <body>

        <section data-role="page" id='overview' data-id="navheader" data-position="fixed">
            <div data-role="header">
                <h1>Overview</h1>
            </div><!-- /header -->
            <div data-role="content">


            </div>
            <? myfooter(); ?>
        </section> <!-- /overview -->

        <section data-role="page" id='bills' data-id="navheader" data-position="fixed">
            <div data-role="header">
                <h1>Bills</h1>
            </div><!-- /header -->
            <div data-role="content">
            </div>
            <? myfooter(); ?>
        </section> <!-- /Bills -->


        <section data-role="page" id='savings' data-id="navheader" data-position="fixed">
            <div data-role="header">
                <h1>Savings</h1>
            </div><!-- /header -->
            <div data-role="content">
            </div>
            <? myfooter(); ?>

        </section> <!-- /Savings -->


        <section data-role="page" id='spending' data-id="navheader" data-position="fixed">
            <div data-role="header">
                <h1>Spending</h1>
            </div><!-- /header -->
            <div data-role="content">
            </div>
            <? myfooter(); ?>

        </section> <!-- /Spending -->

        <section data-role="page" id='transfers' data-id="navheader" data-position="fixed">
            <div data-role="header">
                <h1>Transfers</h1>
            </div><!-- /header -->
            <div data-role="content">	
                <form action=''>
                    <div class="formfield" data-role="fieldcontain">-
                        <br><br>
                        <Select id="divselector" data-native-menu="false">
                            <option>Select Category</option>
                            <option value="deposit">Deposit</option>
                            <option value="transfer">Transfer Between Acounts</option>
                            <option value="spending">Spending</option>
                            <option value="bills">Bills</option>
                            <option value="savings">Savings</option>
                        </Select>
                        <div id="deposit" class="divsection" style="display:none">
                            <select id='ToAccount' data-native-menu="false">
                                <option>Select Account</option>
                                <option value="John">John's Account</option>
                                <option value="Kacee">Kacee's Account</option>
                            </select>
                            <input type="tel" class="currency" placeholder='0.00'/>
                            <textarea id='Notes' placeholder='Enter Notes Here'></textarea>
                            <input type="submit" value="Submit">
                        </div>
                        <div id="transfer" class="divsection" style="display:none">
                            <? var_dump(getAccountList('od6')); ?>
                        </div>
                        <div id="spending" class="divsection" style="display:none">
                            spending.. 
                        </div>
                        <div id="bills" class="divsection" style="display:none">
                            bills.. 
                        </div>
                        <div id="savings" class="divsection" style="display:none">
                            savings.. 
                        </div>
                    </div>
                </form>
            </div><!-- /content -->
            <? myfooter(); ?>
        </section><!-- /transfers -->
    </body>
</html>

