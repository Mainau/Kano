<div style="border:1px solid black;padding:5px">
    <p style="font-size:18;font-weight:bold">{{$requirement->functionalphrase}}.</p>
    <br></br>
    <br></br>
</div>
<table id="radioTable">
    <tr>
        <td>
            <p> Bitte bewerten Sie die Anforderungen</p>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" id="helpful"> Das würde mir sehr helfen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" id="basic"> Das ist eine grundlegende Anforderung für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" id="irrelevant"> Das würde mich nicht betreffen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" id="annoying"> Das wäre eine geringe Unannehmlichkeit für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" id="problematic"> Das wäre ein großes Problem für mich </input><br/>
        </td>
        <td>
            <p> Wie wichtig ist diese Anforderung für Sie?</p>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" id="extremely_important"> Überaus wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" id="very_important"> Sehr wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" id="important"> Wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" id="less_important"> Ein wenig wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" id="not_important"> Überhaupt nicht wichtig </input>
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
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" id="helpful"> Das würde mir sehr helfen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" id="basic"> Das ist eine grundlegende Anforderung für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" id="irrelevant"> Das würde mich nicht betreffen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" id="annoying"> Das wäre eine geringe Unannehmlichkeit für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" id="problematic"> Das wäre ein großes Problem für mich </input><br/>
        </td>
    </tr>
</table>
