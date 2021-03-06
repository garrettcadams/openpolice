<!-- resources/views/vendor/openpolice/volun/volun-dept-edit.blade.php -->

@extends('vendor.survloop.master')

@section('content')

<form name="deptEditor" action="/dashboard/volunteer/verify/{{ $deptRow->DeptSlug }}" method="post" onSubmit="formSub();" autocomplete="off">
<input type="hidden" id="csrfTok" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="formLoaded" value="<?= time() ?>">
<input type="hidden" name="DeptID" value="{{ $deptRow->DeptID }}">
<input type="hidden" id="ScoreOpen" name="DeptScoreOpenness" value="{{ intVal($deptRow->DeptScoreOpenness) }}" >

<div class="row mT10 mB5">
    <div class="col-md-6">
        <a class="toggleScoreInfo btn btn-info btn-lg" href="javascript:;">OPC Accessibility Score: 
            <div id="ScoreOpenVis" class="disIn bld mL5">{{ intVal($deptRow->DeptScoreOpenness) }}</div></a>
    </div>
    <div class="col-md-6 taR pB10">
        {!! $editsSummary[0] !!}
        <?php /* <h1>
            Verifying: {{ str_replace('Police Dept', '', str_replace('Department', 'Dept', $deptRow->DeptName)) }} 
            <div class="disIn gry9 f18 mL20">
                <nobr>{{ $deptRow->DeptAddressCity }}, {{ $deptRow->DeptAddressState }}</nobr>
            </div>
        </h1>
        */ ?>
    </div>
</div>

<div id="deptContact" class="disBlo">
    <div class="row mB10">
        <div class="col-md-9">
            <h2 class="slBlueDark m0">Department Main Contact Info</h2>
        </div>
        <div class="col-md-3 taR">
            <a href="https://www.google.com/search?as_q={{ $deptRow->DeptName }}, {{ $deptRow->DeptAddressState }} {{ $deptRow->DeptAddressZip }}" 
                class="btn btn-default slBlueDark mT5" target="_blank">Begin Department Search&nbsp;&nbsp;
                <span class=""><i class="fa fa-google"></i></span></a>
        </div>
    </div>
    
    <div class="row gry9">
        <div class="col-md-6">
            <fieldset class="form-group">
                <label for="DeptNameID">Department Name</label>
                <input id="DeptNameID" name="DeptName" value="{{ $deptRow->DeptName }}" 
                    type="text" class="form-control input-lg" > 
            </fieldset>
            <fieldset class="form-group">
                <label for="DeptAddressID">Street Address</label>
                <input id="DeptAddressID" name="DeptAddress" value="{{ $deptRow->DeptAddress }}" 
                    type="text" class="form-control input-lg" > 
            </fieldset>
            <fieldset class="form-group">
                <label for="DeptAddress2ID">Address Line 2</label>
                <input id="DeptAddress2ID" name="DeptAddress2" value="{{ $deptRow->DeptAddress2 }}" 
                    type="text" class="form-control input-lg" > 
            </fieldset>
            <div class="row">
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <label for="DeptAddressCityID">City</label>
                        <input id="DeptAddressCityID" name="DeptAddressCity" value="{{ $deptRow->DeptAddressCity }}" 
                            type="text" class="form-control input-lg" > 
                    </fieldset>
                </div>
                <div class="col-md-3">
                    <fieldset class="form-group">
                        <label for="DeptAddressStateID">State</label>
                        <select id="DeptAddressStateID" name="DeptAddressState" class="form-control input-lg" autocomplete="off">
                        {!! $stateDrop !!}
                        </select>
                    </fieldset>
                </div>
                <div class="col-md-3">
                    <fieldset class="form-group">
                        <label for="DeptAddressZipID">Zip</label>
                        <input id="DeptAddressZipID" name="DeptAddressZip" value="{{ $deptRow->DeptAddressZip }}" type="text" class="form-control input-lg" > 
                    </fieldset>
                </div>
            </div>
            <fieldset class="form-group">
                <label for="DeptAddressCountyID">County</label>
                <input id="DeptAddressCountyID" name="DeptAddressCounty" value="{{ $deptRow->DeptAddressCounty }}" type="text" class="form-control input-lg" > 
            </fieldset>
            <div class="disNon">
                <fieldset class="form-group gryA">
                    <label for="DeptSlugID">URL Slug</label>
                    <input id="DeptSlugID" name="DeptSlug" value="{{ $deptRow->DeptSlug }}" type="text" class="form-control input-lg gryA" > 
                </fieldset>
            </div>
        </div>
        
        <div class="col-md-1"></div>
        
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <label for="DeptTypeID">Type of Department</label>
                        <select id="DeptTypeID" name="DeptType" class="form-control input-lg" >
                        <option value="" @if (trim($deptRow->DeptType) == '') SELECTED @endif >select</option>
                        @foreach ($deptTypes as $t) 
                            <option value="{{ $t->DefID }}" @if ($t->DefID == $deptRow->DeptType) SELECTED @endif >{{ $t->DefValue }}</option>
                        @endforeach
                        </select>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <label for="DeptStatusID">Activity Status</label>
                        <select id="DeptStatusID" name="DeptStatus" class="form-control input-lg" >
                        <option value="1" @if (intVal($deptRow->DeptStatus) == 1) SELECTED @endif >Active Department</option>
                        <option value="0" @if (intVal($deptRow->DeptStatus) == 0) SELECTED @endif >Inactive Department</option>
                        </select>
                    </fieldset>
                </div>
            </div>
            <fieldset class="form-group">
                <label for="DeptPhoneWorkID">Main Phone Number</label>
                <input id="DeptPhoneWorkID" name="DeptPhoneWork" value="{{ $deptRow->DeptPhoneWork }}" type="text" class="form-control input-lg" > 
            </fieldset>
            
            <div class="p20"></div>
            <table border=0 cellpadding=0 cellspacing=0 align=right ><tr><td class="pT5 taC">
                <a href="https://en.wikipedia.org/wiki/{!! str_replace(' ', '_', str_replace('Dept', 'Department', $deptRow->DeptName)) !!}" 
                    class="btn btn-xs btn-default slBlueDark mB10" target="_blank">Department on <i class="fa fa-wikipedia-w"></i>ikipedia</a>
                <br />
                <a href="https://en.wikipedia.org/wiki/{!! str_replace(' ', '_', $deptRow->DeptAddressCity.', '.$GLOBALS['SL']->states->getState($deptRow->DeptAddressState)) !!}" 
                    class="btn btn-xs btn-default slBlueDark mR10" target="_blank">City&nbsp;&nbsp;<i class="fa fa-wikipedia-w"></i></a>
                <a href="https://en.wikipedia.org/wiki/{!! str_replace(' ', '_', $deptRow->DeptAddressCounty.' County, '.$GLOBALS['SL']->states->getState($deptRow->DeptAddressState)) !!}" 
                    class="btn btn-xs btn-default slBlueDark" target="_blank">County&nbsp;&nbsp;<i class="fa fa-wikipedia-w"></i></a>
            </td></tr></table>
            <h3 class="blk m0">Stats</h3>
            <small class="text-muted mTn20"><i>Please provide numbers like "1600000", not "1.6 million".</i></small>
            <fieldset class="form-group">
                <label for="DeptTotOfficersID"># of Employees <span class="gryC">(all employees, not just officers)</span></label>
                <input id="DeptTotOfficersID" name="DeptTotOfficers" value="{{ $deptRow->DeptTotOfficers }}" type="number" class="form-control input-lg" > 
            </fieldset>
            <fieldset class="form-group">
                <label for="DeptJurisdictionPopulationID"># of Population Served</label>
                <input id="DeptJurisdictionPopulationID" name="DeptJurisdictionPopulation" class="form-control input-lg" 
                    value="{{ $deptRow->DeptJurisdictionPopulation }}" type="number" > 
            </fieldset>
        </div>
    </div>
</div>

<a name="web"></a>
<div id="deptWeb" class="disNon">
    
    {!! $iaComplaints !!}
    
</div>

<a name="IA"></a>
<div id="deptIA" class="disNon">
        
    {!! $iaForms !!}
    
</div>

<a name="oversight"></a>
<div id="deptOver" class="disNon">

    {!! $civForms !!}

</div>

<a name="save"></a>
<div id="deptSave" class="disNon">
    <h2><i class="fa fa-floppy-o"></i> Save All Changes: <span class="slBlueDark">{{ $deptRow->DeptName }}</span></h2>
    <div class="row mB10">
        <div id="roundHelp" class="col-md-6">
            <h3 class="nobld">Great!<br />What did you help with this round?</h3>
            <div class="checkbox f18 blk pL20">
                <label>
                    <input type="checkbox" name="EditOverOnlineResearch" id="EditOverOnlineResearchID" value="1" onClick="checkStar('EditOverOnlineResearchID', 'saveStar1');"> 
                    <i class="fa fa-laptop"></i> <img id="saveStar1" src="/openpolice/star1-gry.png" border=0 height=15 > Online Research <span class="nobld f14 gry9">(if you did search for <b class="f18">ALL</b> desired info)</span>
                </label>
            </div>
            <div class="checkbox f18 blk pL20">
                <label>
                    <input type="checkbox" name="EditOverMadeDeptCall" id="EditOverMadeDeptCallID" value="1" onClick="checkStar('EditOverMadeDeptCallID', 'saveStar2');"> 
                    <i class="fa fa-phone"></i> <img id="saveStar2" src="/openpolice/star1-gry.png" border=0 height=15 ><img id="saveStar2b" src="/openpolice/star1-gry.png" border=0 height=15 class="mLn5" ><img id="saveStar2c" src="/openpolice/star1-gry.png" border=0 height=15 class="mLn5" > Called and spoke with Main Department
                </label>
            </div>
            <div class="checkbox f18 blk pL20">
                <label>
                    <input type="checkbox" name="EditOverMadeIACall" id="EditOverMadeIACallID" value="1" onClick="checkStar('EditOverMadeIACallID', 'saveStar3');"> 
                    <i class="fa fa-phone"></i> <img id="saveStar3" src="/openpolice/star1-gry.png" border=0 height=15 ><img id="saveStar3b" src="/openpolice/star1-gry.png" border=0 height=15 class="mLn5" ><img id="saveStar3c" src="/openpolice/star1-gry.png" border=0 height=15 class="mLn5" > Called and spoke with Internal Affairs
                </label>
            </div>
            <div class="gry9 f16">If none of these three, it's assumed you've just made a few smaller corrections.</div>
            <div class="p20"></div>
            <center><input type="submit" class="btn btn-lg btn-primary f26" value="Save All Department Changes"></center>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 pB20 mB20">
            <fieldset class="form-group">
                <h3><label for="whatNextID">Got notes for other staff and volunteers?</label></h3>
                <textarea name="EditOverNotes" id="EditOverNotesID" class="form-control input-lg"></textarea>
            </fieldset>
            <fieldset class="form-group">
                <h3><label for="whatNextID">After Saving...</label></h3>
                <select name="whatNext" id="whatNextID" class="form-control input-lg">
                    <option value="{{ $nextDept[2] }}" @if ($whatNext == 'another') SELECTED @endif >Next: {{ $nextDept[1] }}</option>
                    <option value="again" @if ($whatNext == 'again') SELECTED @endif >Save Changes &amp; Keep Editing Department</option>
                    <option value="list" @if ($whatNext == 'list') SELECTED @endif >Go Back to List of Departments</option>
                </select> 
            </fieldset>
        </div>
    </div>
    <div class="well">
        <i class="fa fa-info-circle"></i> Yes, you must use this big Save Button above if you want to save ANY and ALL updates you have just made 
        to the data records of this department, it's web presence, internal affairs office, and civilian oversight agency.<br />
        <img src="/openpolice/star1.png" border=0 height=15 ><img src="/openpolice/star1.png" border=0 height=15 class="mLn5" ><img src="/openpolice/star1.png" border=0 height=15 class="mLn5" ><img src="/openpolice/star1.png" border=0 height=15 class="mLn5" ><img src="/openpolice/star1.png" border=0 height=15 class="mLn5" ><img src="/openpolice/star1.png" border=0 height=15 class="mLn5" ><img src="/openpolice/star1.png" border=0 height=15 class="mLn5" > 
        You can get up to seven gold stars for each department that you help with, one for online research, and three for each successful phone call.
    </div>
</div>

<a name="edits"></a>
<div id="deptEdits" class="disNon">
    <div class="row mB10">
        <div class="col-md-9">
            <h2 class="slBlueDark m0">Past Department Edits</h2>
        </div>
        <div class="col-md-3 pT20 taR"></div>
    </div>
    
    @if (sizeof($editsIA) > 0)
        <table class="table table-striped" >
        <tr>
            <th>Date</th>
            <th>Volunteer</th>
            <th><i class="fa fa-laptop"></i> Online Research, <i class="fa fa-phone"></i> Called Dept, <span class="slBlueDark"><i class="fa fa-phone"></i> Called IA</span></th>
            <th>Volunteer Notes</th>
        </tr>
        @forelse($editsIA as $i => $edit)
            @if (sizeof($edit) > 0 && isset($edit->EditOverOverID))
                <tr><td>
                    @if (isset($edit->EditOverVerified)) {{ date("n/j/y", strtotime($edit->EditOverVerified)) }} @endif
                </td><td>
                    @if (intVal($edit->EditOverUser) > 0 && isset($userNames[$edit->EditOverUser])) {!! $userNames[$edit->EditOverUser] !!} @endif
                </td><td> 
                    @if ($edit->EditOverOnlineResearch == 1) <i class="fa fa-laptop"></i>, @endif
                    @if ($edit->EditOverMadeDeptCall == 1) <i class="fa fa-phone"></i>Dept, @endif
                    @if ($edit->EditOverMadeIACall == 1) <span class="slBlueDark"><i class="fa fa-phone "></i>IA</span>, @endif
                </td><td>
                    @if (isset($edit->EditOverNotes) && trim($edit->EditOverNotes) != '')
                        {{ $edit->EditOverNotes }}
                    @endif
                </td></tr>
            @endif
        @empty
            <tr><td colspan=4 >no edits found</td></tr>
        @endforelse
        </table>
    @else
        <div class="gry9"><i>No volunteer edits of this departments yet.</i></div>
    @endif
    
    <div class="pT20">
    @if ($recentEdits != '')
        <h3 class="slBlueDark">Detailed Edit History...</h3>
        <table class="table table-striped" border=0 cellpadding=10 >
        <tr><th>Edit Details</th><th>Department Info</th><th>Internal Affairs</th><th>Civilian Oversight</th></tr>
        {!! $recentEdits !!}
        </table>
    @endif
    </div>
</div>

<a name="checklist"></a>
<div id="deptCheck" class="disNon">
    <div class="row mB10">
        <div class="col-md-9">
            <h2 class="slBlueDark m0">
                Volunteer Checklist 
                <a class="f12" href="/dashboard/volunteer/verify/checklist" target="_blank"><i class="fa fa-external-link"></i> Open In New Window</a>
            </h2>
        </div>
        <div class="col-md-3 pT20 taR"></div>
    </div>
    
    <div class="row gry9">
        <div class="col-md-12 blk">
            {!! $volunChecklist !!}
        </div>
    </div>
</div>

<a name="faq"></a>
<div id="deptFAQ" class="disNon">
    <div class="row mB10">
        <div class="col-md-9">
            <h2 class="slBlueDark m0">Volunteers' Frequently Asked Questions</h2>
        </div>
        <div class="col-md-3 pT20 taR"></div>
    </div>
    
    <div class="row gry9">
        <div id="faqList" class="col-md-12 blk">
            {!! $FAQs !!}
        </div>
    </div>
</div>
    
</form>

<style>
#navBtnSave .fa-angle-right, #navBtnSave .fa-chevron-right { display: none; }
fieldset.form-group label { font-weight: normal; margin-top: 10px; }
#roundHelp div label input { margin-top: 6px; }
#roundHelp div label i { width: 25px; text-align: center; }
#roundHelp div label img { margin-top: -5px; }
#faqList ul li { padding-bottom: 30px; }
</style>

@endsection