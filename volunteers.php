<?php require 'views/header.php'; ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-4" style="margin-left:20px; margin-right: 20px;">
                <div class="container p-3 my-3 border">
                    <h2 style="text-align:center;color:black">Academic Year</h2>
                    <hr style="width:80%;color:black;margin-left: auto; margin-right: auto;">
                    <div class="d-flex justify-content-center">
                        <select class="form-select" aria-label="Default select example">
                            <option selected style="color:black;">2021-2022</option>
                            <option value="1" style="color:black;">2020-2021</option>
                        </select>
                    </div>
                </div> 
            </div>
            <div class="col-sm-7" style="margin-left:20px; margin-right: 20px;">
                <div class="container">
        
                </div>
            </div>
        </div>

        <!-- tab controllers -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="unit1-tab" data-bs-toggle="tab" data-bs-target="#unit1" type="button" role="tab">
                    Unit 1
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="unit2-tab" data-bs-toggle="tab" data-bs-target="#unit2" type="button" role="tab">
                    Unit 2
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="unit3-tab" data-bs-toggle="tab" data-bs-target="#unit3" type="button" role="tab">
                    Unit 3
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="unit4-tab" data-bs-toggle="tab" data-bs-target="#unit4" type="button" role="tab">
                    Unit 4
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="unit5-tab" data-bs-toggle="tab" data-bs-target="#unit5" type="button" role="tab">
                    Unit 5
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="unit6-tab" data-bs-toggle="tab" data-bs-target="#unit6" type="button" role="tab">
                    Unit 6
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="unit7-tab" data-bs-toggle="tab" data-bs-target="#unit7" type="button" role="tab">
                    Unit 7
                </button>
            </li>
        </ul>

        <!-- tab content -->
        <div class="tab-content">
            <div class="tab-pane container active" id="unit1" role="tabpanel">
                <div class="container">
                    <h1>Unit 1 content</h1>
                </div>
            </div>
            <div class="tab-pane" id="unit2" role="tabpanel">
                <div class="container">
                    <h1>Unit 2 content</h1>
                </div>
            </div>
            <div class="tab-pane" id="unit3" role="tabpanel">
                <div class="container">
                    <h1>Unit 3 content</h1>
                </div>
            </div>
            <div class="tab-pane" id="unit4" role="tabpanel">
                <div class="container">
                    <h1>Unit 4 content</h1>
                </div>
            </div>
            <div class="tab-pane" id="unit5" role="tabpanel">
                <div class="container">
                    <h1>Unit 5 content</h1>
                </div>
            </div>
            <div class="tab-pane" id="unit6" role="tabpanel">
                <div class="container">
                    <h1>Unit 6 content</h1>
                </div>
            </div>
            <div class="tab-pane" id="unit7" role="tabpanel">
                <div class="container">
                    <h1>Unit 7 content</h1>
                </div>
            </div>
        </div>
    </div>

<script>
  var firstTabEl = document.querySelector('#myTab li:last-child button')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()
</script>


<?php require 'views/footer.php'; ?>
