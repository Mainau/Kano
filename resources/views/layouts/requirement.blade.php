<div style="border:1px solid black;padding:5px">
    <p style="font-size:18;font-weight:bold">{{$requirement->functionalphrase}}.</p>
    <br></br>
    <br></br>
</div>
<table id="radioTable">
    <tr>
        <td>
            <p> Bitte bewerten Sie die Anforderungen</p>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="2" id="helpful"> Das würde mir sehr helfen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="4" id="basic"> Das ist eine grundlegende Anforderung für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="0" id="irrelevant"> Das würde mich nicht betreffen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="-1" id="annoying"> Das wäre eine geringe Unannehmlichkeit für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="-2" id="problematic"> Das wäre ein großes Problem für mich </input><br/>
        </td>
        <td>
            <p> Wie wichtig ist diese Anforderung für Sie?</p>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="5" id="extremely_important"> Überaus wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="4" id="very_important"> Sehr wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="3" id="important"> Wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="2" id="less_important"> Ein wenig wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="1" id="not_important"> Überhaupt nicht wichtig </input>
        </td>
    </tr>
</table>

<br>

<div style="border:1px solid black;padding:5px">
    <p style="font-size:18;font-weight:bold">{{$requirement->dysfunctionalphrase}}.</p>
    <br></br>
    <br></br>
</div>
<table id="radioTable">
    <tr>
        <td>
            <p> Bitte bewerten Sie die Anforderungen</p>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="-1" id="helpful"> Das würde mir sehr helfen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="-2" id="basic"> Das ist eine grundlegende Anforderung für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="0" id="irrelevant"> Das würde mich nicht betreffen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="2" id="annoying"> Das wäre eine geringe Unannehmlichkeit für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="4" id="problematic"> Das wäre ein großes Problem für mich </input><br/>
        </td>
    </tr>
</table>
