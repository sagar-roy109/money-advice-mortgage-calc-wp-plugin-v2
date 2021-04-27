
        <div class="money-advice-calculator">
            <div class="container">
                <div class="row">
                    <div id="upperContent" class="upper-content shadow">
                        <h3 class="money-advice-calculator-title">Mortgage Calculator</h3>
                        <h5 class="money-advice-ccalculator-sub-title">Calculate your monthly mortgage payment</h5>
                        <p>
                            This is a guide to how much you'd pay each month. The exact amount will depend on the type of
                        mortgage and the lender.
                        </p>
                        <h5>Plan ahead and estimate your monthly payment now.</h5>
                        <!-- Calculator Upper Input  -->
                        <div class="calculator-input-upper">
                            <!-- property-price  -->
                            <div class="property-price">
                                <label class="form-label" for="propertyPriceUpper">Price of the property is</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">£</span>
                                    <input
                                        type="text"
                                        onkeypress="return isNumber(event)"
                                        id="propertyPriceUpper"
                                        class="form-control"
                                        placeholder="0.00"
                                    >
                                </div>
                            </div>
                            <!-- Available Deposit  -->
                            <div class="available-deposit">
                                <label class="form-label" for="availableDepositUpper">
                                    Deposit available is
                                </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">£</span>
                                    <input
                                        type="text"
                                        onkeypress="return isNumber(event) "
                                        id="availableDepositUpper"
                                        class="form-control"
                                        placeholder="0.00"
                                    >
                                </div>
                            </div>
                            <!-- alert  -->
                            <div id="calculatorUpperNotice" class="calculator-upper-notice alert alert-primary " role="alert">
                                <svg
                                    style="margin-right: 10px;"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    fill="currentColor"
                                    class="bi bi-question-circle-fill"
                                    viewBox="0 0 16 16"
                                >
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                </svg>
                                Remember to plan for other costs like mortgage fees, legal fees and Stamp Duty tax.
                            </div>
                            <!-- Next Button  -->
                            <div id="calculatorNext" class="btn btn-primary float-end">Next</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="lowerContent" class="lower-content">
                        <h3 class="money-advice-calculator-title">Mortgage Calculator</h3>
                        <h5 class="money-advice-ccalculator-sub-title">Calculate your monthly mortgage payment</h5>
                        <p>
                            This is a guide to how much you'd pay each month. Adjust the sliders to change the term to the number of years you have left to pay, and increase the interest rate. The exact amount will depend on the type of mortgage and the lender.
                        </p>
                        <!-- Tabs -->
                        <div class="tab-container d-flex">
                            <a href="#" class="tab active" data-toggle-target=".repayment">Repayment</a>
                            <a href="#" class="tab" data-toggle-target=".interest">Interest Only</a>
                        </div>
                        <!-- Tab Content -->
                        <div class="tab-content repayment active">
                            <div class="row">
                                <div class="col-md-16 col-lg-6">
                                    <p class="repayment-amount">
                                        £
                                        <span id="repaymentAmount">10</span>
                                    </p>
                                    <span class="month">a month</span>
                                    <br>
                                    
                                </div>
                                <div class="col-md-16 col-lg-6">
                                    <div class="alert-box">
                                        <p class="header">
                                            <svg
                                                style="margin-right: 10px;"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                fill="currentColor"
                                                class="bi bi-question-circle-fill"
                                                viewBox="0 0 16 16"
                                            >
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                            </svg>
                                            Make sure you can afford it!
                                        </p>
                                        <p class="alert-content">If your interest rate goes up by
                                            <span id="repaymentInterestRate">3%</span>
                                            your monthly payment will be
                                            <span id="repaymentMonthlyTotal">£134.50</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content interest">
                            <div class="row">
                                <div class="col-md-16 col-lg-6">
                                    <p class="interest-amount">
                                        £
                                        <span id="interestAmount">10</span>
                                    </p>
                                    <span class="month">a month</span>
                                    <br>
                                    
                                </div>
                                <div class="col-md-16 col-lg-6">
                                    <div class="alert-box">
                                        <p class="header">
                                            <svg
                                                style="margin-right: 10px;"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                fill="currentColor"
                                                class="bi bi-question-circle-fill"
                                                viewBox="0 0 16 16"
                                            >
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                            </svg>
                                            Make sure you can afford it!
                                        </p>
                                        <p class="alert-content">If your interest rate goes up by
                                            <span id="repaymentInterestRate">3%</span>
                                            your monthly payment will be
                                            <span id="onlyTotalInterest">£134.50</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Data Input Area  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-area">
                                    <!-- property-price  -->
                                    <div class="property-price">
                                        <label class="form-label" for="propertyPriceLower">Price of the property is</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">£</span>
                                            <input
                                                type="text"
                                                onkeypress="return isNumber(event)"
                                                id="propertyPriceLower"
                                                class="form-control"
                                                placeholder="0.00"
                                            >
                                        </div>
                                    </div>
                                    <!-- Available Deposit  -->
                                    <div class="available-deposit">
                                        <label class="form-label" for="availableDepositLower">
                                            Deposit available is
                                        </label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">£</span>
                                            <input
                                                type="text"
                                                onkeypress="return isNumber(event) "
                                                id="availableDepositLower"
                                                class="form-control"
                                                placeholder="0.00"
                                            >
                                        </div>
                                    </div>
                                    <!-- Mortgage Term  -->
                                    <div class="mortgage-term">
                                        <label class="form-label" for="years">Mortgage term is</label>
                                        <div class="input-group mb-5">
                                            <input
                                                type="text"
                                                id="mortgageTerm"
                                                class="form-control"
                                                readonly
                                            >
                                            <span class="input-group-text">Years</span>
                                        </div>
                                        <input type="text" id="termRange">
                                    </div>
                                    <!-- Interest Rate  -->
                                    <div class="interest-rate">
                                        <label class="form-label" for="interestRate">Interest rate is</label>
                                        <div class="input-group mb-5">
                                            <input
                                                type="text"
                                                id="interestRate"
                                                class="form-control"
                                                readonly
                                            >
                                            <span class="input-group-text" id="basic-addon1">%</span>
                                        </div>
                                        <input type="text" id="interestRange">
                                    </div>
                                    <!-- Back Button  -->
                                    <div id="calculatorBack" class="btn btn-primary float-end">Back</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-5">Three steps to lower your monthly payments:</h4>
                                <div class="calculator-steps">
                                    <ol>
                                        <li>
                                            <p>
                                                <b>
                                                    Choosing the right type of mortgages that fits your circumstances.
                                                </b>
                                                <br>
                                                <a target="_blank" href="<?php echo $values['first_url'] ?>">Contact us to get a more tailored solution.</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <b>
                                                Are you eligible for an affordable housing scheme?
                                                </b>
                                                <br>
                                                <a target="_blank" href="<?php echo $values['second_url'] ?>">Click here to find out more about the Government scheme.</a>
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
