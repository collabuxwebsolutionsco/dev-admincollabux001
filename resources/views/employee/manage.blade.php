@extends('main_layout')

@section('content')
  <!-- MAIN PANEL -->
    <div id="main" role="main">

      <!-- RIBBON -->
      <div id="ribbon">
        <div class="row">

        <!-- breadcrumb -->
        <section class="col-sm-6 col-md-6 col-lg-6">
          <ol class="breadcrumb">
            <li>
              {{$breadcrumb}}
            </li>
          </ol>
        </section>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->
         
        <section class="col-sm-6 col-md-6 col-lg-6 header-button">
          <a class="btn btn-primary" href="javascript:void(0);"><b>Archive Selected</b></a> 
        </section>        </div>
         
      </div>
      <!-- END RIBBON -->

      <!-- MAIN CONTENT -->
      <div id="content">
        <section id="" class="">
        <!-- START ROW -->
          <div class="row">
        
            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-12">
                      
              <!-- Widget ID (each widget will need unique ID)-->
              <div class="jarviswidget jarviswidget-color-red" id="wid-id-3" data-widget-editbutton="false">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
        
                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"
        
                -->
                <header class="section-header">                  
                  <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                  <h2>Employee List</h2>                  
                  <div class="widget-toolbar">
                    Display Records:
                    <div class="btn-group">
                      <button class="btn dropdown-toggle btn-xs btn-primary" data-toggle="dropdown">
                        Active <i class="fa fa-caret-down"></i>
                      </button>
                      <ul class="dropdown-menu pull-right">
                        <li>
                          <a href="javascript:void(0);">Active</a>
                        </li>
                        <li>
                          <a href="javascript:void(0);">Archive</a>
                        </li>                        
                      </ul>
                    </div>
                  </div>                  
        
                </header>
        
                <!-- widget div-->
                <div>
        
                  <!-- widget edit box -->
                  <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->
        
                  </div>
                  <!-- end widget edit box -->
        
                  <!-- widget content -->
                  <div class="widget-body no-padding">
                    <div class="widget-body-toolbar">
        
                    </div>
                    <table id="datatable_tabletools" class="table table-bordered table-striped table-condensed table-hover  has-tickbox">
                      <thead>
                        <tr>
                          <th class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </th>
                          <th>#</th>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Salary</th>
                          <th>Supervisor</th>
                          <th>Status</th>
                          <th class="action">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>1</td>
                          <td>Jennifer</td>
                          <td>1-342-463-8341</td>
                          <td>Et Rutrum Non Associates</td>
                          <td>35728</td>
                          <td>Fogo</td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="javascript:void(0);">Action</a>
                                </li>
                                <li>
                                  <a href="view" target="_blank">View</a>
                                </li>
                                <li>
                                  <a href="edit">Edit Info</a>
                                </li>                                
                                <li>
                                  <a href="compensation">Compensation</a>
                                </li>                                
                                <li>
                                  <a href="javascript:void(0);">Archive</a>
                                </li>                                
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>2</td>
                          <td>Clark</td>
                          <td>1-516-859-1120</td>
                          <td>Nam Ac Inc.</td>
                          <td>7162</td>
                          <td>Machelen</td>
                          <td>03/23/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>3</td>
                          <td>Brendan</td>
                          <td>1-724-406-2487</td>
                          <td>Enim Commodo Limited</td>
                          <td>98611</td>
                          <td>Norman</td>
                          <td>02/13/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>4</td>
                          <td>Warren</td>
                          <td>1-412-485-9725</td>
                          <td>Odio Etiam Institute</td>
                          <td>10312</td>
                          <td>Sautin</td>
                          <td>01/01/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>5</td>
                          <td>Rajah</td>
                          <td>1-849-642-8777</td>
                          <td>Neque Ltd</td>
                          <td>29131</td>
                          <td>Glovertown</td>
                          <td>02/16/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>6</td>
                          <td>Demetrius</td>
                          <td>1-470-329-9627</td>
                          <td>Euismod In Ltd</td>
                          <td>1883</td>
                          <td>Kapolei</td>
                          <td>03/15/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>7</td>
                          <td>Keefe</td>
                          <td>1-188-191-2346</td>
                          <td>Molestie Industries</td>
                          <td>2211BM</td>
                          <td>Modena</td>
                          <td>07/08/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>8</td>
                          <td>Leila</td>
                          <td>1-663-655-8904</td>
                          <td>Est LLC</td>
                          <td>75286</td>
                          <td>Hondelange</td>
                          <td>12/09/12</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>9</td>
                          <td>Fritz</td>
                          <td>1-598-234-7837</td>
                          <td>Et Ultrices Posuere Institute</td>
                          <td>2324</td>
                          <td>Monte San Pietrangeli</td>
                          <td>12/29/12</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>10</td>
                          <td>Cassady</td>
                          <td>1-212-965-8381</td>
                          <td>Vitae Erat Vel Company</td>
                          <td>5898</td>
                          <td>Huntly</td>
                          <td>10/07/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>11</td>
                          <td>Rogan</td>
                          <td>1-541-654-9030</td>
                          <td>Iaculis Incorporated</td>
                          <td>6464JN</td>
                          <td>Carson City</td>
                          <td>05/30/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>12</td>
                          <td>Candice</td>
                          <td>1-153-708-6027</td>
                          <td>Pellentesque Company</td>
                          <td>8565</td>
                          <td>Redruth</td>
                          <td>02/25/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>13</td>
                          <td>Brittany</td>
                          <td>1-987-452-6038</td>
                          <td>Suspendisse Inc.</td>
                          <td>4031</td>
                          <td>Carapicuíba</td>
                          <td>10/13/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>14</td>
                          <td>Baxter</td>
                          <td>1-281-147-5085</td>
                          <td>Nulla Donec Non Associates</td>
                          <td>53067</td>
                          <td>Yellowknife</td>
                          <td>08/14/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>15</td>
                          <td>Vaughan</td>
                          <td>1-940-231-1787</td>
                          <td>Metus Facilisis Lorem Incorporated</td>
                          <td>26530-046</td>
                          <td>Guarapuava</td>
                          <td>11/17/12</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>16</td>
                          <td>Ivan</td>
                          <td>1-314-209-1223</td>
                          <td>Posuere Vulputate Inc.</td>
                          <td>KX3W 1OI</td>
                          <td>Bienne-lez-Happart</td>
                          <td>03/04/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>17</td>
                          <td>Marah</td>
                          <td>1-348-582-4041</td>
                          <td>Feugiat Ltd</td>
                          <td>2128</td>
                          <td>Nîmes</td>
                          <td>11/29/12</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>18</td>
                          <td>Kiara</td>
                          <td>1-570-428-6681</td>
                          <td>Et Euismod Et Corp.</td>
                          <td>70483</td>
                          <td>Meeuwen</td>
                          <td>03/28/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>19</td>
                          <td>Brielle</td>
                          <td>1-216-787-0056</td>
                          <td>Quis Massa Mauris Institute</td>
                          <td>19913</td>
                          <td>Mombaruzzo</td>
                          <td>12/17/12</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>20</td>
                          <td>Kennedy</td>
                          <td>1-997-154-9340</td>
                          <td>Quis Diam Pellentesque Institute</td>
                          <td>3092FI</td>
                          <td>Edmundston</td>
                          <td>02/26/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>21</td>
                          <td>Peter</td>
                          <td>1-394-459-3833</td>
                          <td>Mauris Eu Turpis Corporation</td>
                          <td>27337</td>
                          <td>Ravenstein</td>
                          <td>06/05/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>22</td>
                          <td>Kibo</td>
                          <td>1-162-467-7160</td>
                          <td>Massa LLP</td>
                          <td>30305</td>
                          <td>Witney</td>
                          <td>08/20/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>23</td>
                          <td>Tanek</td>
                          <td>1-806-556-1897</td>
                          <td>Pharetra Nam Industries</td>
                          <td>84972</td>
                          <td>Abbotsford</td>
                          <td>05/03/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>24</td>
                          <td>Guinevere</td>
                          <td>1-850-940-6176</td>
                          <td>Montes Nascetur Limited</td>
                          <td>54983</td>
                          <td>Rio Grande</td>
                          <td>02/24/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>25</td>
                          <td>Ronan</td>
                          <td>1-168-544-4394</td>
                          <td>Nunc Inc.</td>
                          <td>12167</td>
                          <td>Pinkafeld</td>
                          <td>01/02/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>26</td>
                          <td>Kasper</td>
                          <td>1-153-221-5650</td>
                          <td>Rutrum Limited</td>
                          <td>M9N 0N6</td>
                          <td>Saint-G?ry</td>
                          <td>04/03/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>27</td>
                          <td>Otto</td>
                          <td>1-894-944-5767</td>
                          <td>Purus Maecenas Libero LLC</td>
                          <td>74552-602</td>
                          <td>Jauche</td>
                          <td>11/17/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>28</td>
                          <td>Brenda</td>
                          <td>1-783-562-8563</td>
                          <td>Sit Consulting</td>
                          <td>15632</td>
                          <td>Llandrindod Wells</td>
                          <td>08/13/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>29</td>
                          <td>Laith</td>
                          <td>1-482-317-8464</td>
                          <td>Tellus Limited</td>
                          <td>P8L 2V5</td>
                          <td>Codó</td>
                          <td>11/02/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>30</td>
                          <td>Ella</td>
                          <td>1-275-839-6518</td>
                          <td>Tincidunt Inc.</td>
                          <td>V8L 7Y0</td>
                          <td>Lummen</td>
                          <td>09/29/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>31</td>
                          <td>Hanae</td>
                          <td>1-339-661-4197</td>
                          <td>Nunc Incorporated</td>
                          <td>47931</td>
                          <td>South Burlington</td>
                          <td>05/19/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>32</td>
                          <td>Donna</td>
                          <td>1-236-575-1365</td>
                          <td>Ultricies Sem Incorporated</td>
                          <td>78685</td>
                          <td>Baranello</td>
                          <td>02/19/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>33</td>
                          <td>Bevis</td>
                          <td>1-955-717-0835</td>
                          <td>Est Ac Inc.</td>
                          <td>7424</td>
                          <td>Ichtegem</td>
                          <td>08/15/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>34</td>
                          <td>Celeste</td>
                          <td>1-368-137-6285</td>
                          <td>Tortor Nibh Sit Inc.</td>
                          <td>01318</td>
                          <td>Portobuffolè</td>
                          <td>05/28/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>35</td>
                          <td>Ila</td>
                          <td>1-315-684-6122</td>
                          <td>Gravida Sagittis Associates</td>
                          <td>4438PF</td>
                          <td>Keswick</td>
                          <td>11/22/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>36</td>
                          <td>Alana</td>
                          <td>1-586-261-7830</td>
                          <td>Nullam Industries</td>
                          <td>6044</td>
                          <td>Bacabal</td>
                          <td>03/04/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>37</td>
                          <td>Rowan</td>
                          <td>1-782-168-2387</td>
                          <td>Aliquet Consulting</td>
                          <td>33000</td>
                          <td>Papasidero</td>
                          <td>02/06/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>38</td>
                          <td>Eric</td>
                          <td>1-161-390-1140</td>
                          <td>Odio Institute</td>
                          <td>5652</td>
                          <td>Moliterno</td>
                          <td>03/14/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>39</td>
                          <td>Dana</td>
                          <td>1-989-320-2205</td>
                          <td>Bibendum Fermentum Institute</td>
                          <td>X31 1HZ</td>
                          <td>Saint-Pierre</td>
                          <td>02/25/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>40</td>
                          <td>Karleigh</td>
                          <td>1-218-513-8714</td>
                          <td>Duis Volutpat Inc.</td>
                          <td>1356</td>
                          <td>Fresno</td>
                          <td>06/09/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>41</td>
                          <td>Malik</td>
                          <td>1-869-972-9871</td>
                          <td>Praesent Luctus Curabitur Limited</td>
                          <td>V3Y 0P0</td>
                          <td>Roxboro</td>
                          <td>05/09/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>42</td>
                          <td>May</td>
                          <td>1-462-220-8205</td>
                          <td>Suspendisse Dui LLP</td>
                          <td>4765</td>
                          <td>Mold</td>
                          <td>06/15/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>43</td>
                          <td>Alan</td>
                          <td>1-478-769-3709</td>
                          <td>Suspendisse Inc.</td>
                          <td>7354AC</td>
                          <td>Norfolk</td>
                          <td>03/09/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>44</td>
                          <td>Anastasia</td>
                          <td>1-589-358-5285</td>
                          <td>Mus Proin Institute</td>
                          <td>33244</td>
                          <td>Montbliart</td>
                          <td>06/18/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>45</td>
                          <td>Yardley</td>
                          <td>1-422-907-2926</td>
                          <td>Urna Et LLP</td>
                          <td>88531</td>
                          <td>Évreux</td>
                          <td>05/23/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>46</td>
                          <td>Oscar</td>
                          <td>1-476-548-4758</td>
                          <td>Nunc Id Enim Institute</td>
                          <td>T5Z 4YS</td>
                          <td>Burlington</td>
                          <td>08/26/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>47</td>
                          <td>Hasad</td>
                          <td>1-397-946-7346</td>
                          <td>Auctor Nunc Corp.</td>
                          <td>2307HU</td>
                          <td>Savona</td>
                          <td>10/29/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>48</td>
                          <td>Mohammad</td>
                          <td>1-984-931-7753</td>
                          <td>Ultricies Dignissim LLP</td>
                          <td>4718</td>
                          <td>Nadrin</td>
                          <td>12/08/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>49</td>
                          <td>Nissim</td>
                          <td>1-739-146-3150</td>
                          <td>Lacus Ltd</td>
                          <td>UX95 5JM</td>
                          <td>Veere</td>
                          <td>08/19/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>50</td>
                          <td>Porter</td>
                          <td>1-299-790-1428</td>
                          <td>Aliquam LLC</td>
                          <td>41708</td>
                          <td>Montaldo Bormida</td>
                          <td>11/02/12</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>51</td>
                          <td>Sophia</td>
                          <td>1-413-195-0820</td>
                          <td>Viverra Maecenas Iaculis Ltd</td>
                          <td>83468</td>
                          <td>Doetinchem</td>
                          <td>09/28/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>52</td>
                          <td>Acton</td>
                          <td>1-855-937-9214</td>
                          <td>Vitae Sodales Company</td>
                          <td>1757</td>
                          <td>Bad Oldesloe</td>
                          <td>04/13/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>53</td>
                          <td>Briar</td>
                          <td>1-846-339-0222</td>
                          <td>Congue Turpis In Limited</td>
                          <td>51510</td>
                          <td>Caerphilly</td>
                          <td>02/06/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>54</td>
                          <td>Benjamin</td>
                          <td>1-828-436-8902</td>
                          <td>Aliquam Nec Enim Ltd</td>
                          <td>4289GW</td>
                          <td>Holyhead</td>
                          <td>12/17/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>55</td>
                          <td>Gregory</td>
                          <td>1-782-119-9191</td>
                          <td>A PC</td>
                          <td>14531</td>
                          <td>Águas Lindas de Goiás</td>
                          <td>04/11/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>56</td>
                          <td>Marny</td>
                          <td>1-255-275-2769</td>
                          <td>Malesuada Institute</td>
                          <td>41706</td>
                          <td>Montaldo Bormida</td>
                          <td>12/19/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>57</td>
                          <td>Indira</td>
                          <td>1-215-687-1488</td>
                          <td>Augue Id Ante PC</td>
                          <td>42010</td>
                          <td>Lorient</td>
                          <td>09/02/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>58</td>
                          <td>Fleur</td>
                          <td>1-309-181-4794</td>
                          <td>Libero Donec Consectetuer Corp.</td>
                          <td>ZD4H 3NF</td>
                          <td>Valleyview</td>
                          <td>01/13/14</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>59</td>
                          <td>Fulton</td>
                          <td>1-380-339-9492</td>
                          <td>Vulputate LLP</td>
                          <td>01154</td>
                          <td>Blois</td>
                          <td>04/16/13</td>
                        </tr>
                        <tr>
                          <td class="smart-form">
                            <label class="checkbox">
                              <input type="checkbox" name="checkbox-inline">
                              <i></i> 
                            </label>
                          </td>
                          <td>60</td>
                          <td>Arsenio</td>
                          <td>1-794-184-3132</td>
                          <td>Nec Diam Duis Ltd</td>
                          <td>91908</td>
                          <td>Foligno</td>
                          <td>05/24/13</td>
                        </tr>
                      </tbody>
                    </table>
        
                  </div>
                  <!-- end widget content -->
        
                </div>
                <!-- end widget div -->
        
              </div>
              <!-- end widget -->
        
            </article>
            <!-- END COL -->
          </div>
        
          <!-- END ROW -->          
        </section>


      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN PANEL -->
@endsection
