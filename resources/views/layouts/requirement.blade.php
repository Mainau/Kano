<div style="border:1px solid black;padding:5px">
    <p style="font-size:18;font-weight:bold">{{$requirement->functionalphrase}}.</p>
    <br></br>
    <br></br>
</div>
<table id="radioTable">
    <tr>
        <td>
            <p> Bitte bewerten Sie die Anforderungen</p>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="entzueckt" id="helpful"> Das würde mir sehr helfen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="wird erwartet" id="basic"> Das ist eine grundlegende Anforderung für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="gleichgueltig" id="irrelevant"> Das würde mich nicht betreffen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="stoert" id="annoying"> Das wäre eine geringe Unannehmlichkeit für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[func_answer]" value="frustriert" id="problematic"> Das wäre ein großes Problem für mich </input><br/>
        </td>
        <td>
            <p> Wie wichtig ist diese Anforderung für Sie?</p>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="extrem wichtig" id="extremely_important"> Überaus wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="sehr wichtig" id="very_important"> Sehr wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="wichtig" id="important"> Wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="weniger wichtig" id="less_important"> Ein wenig wichtig </input><br/>
            <input type="radio" name="{{ $requirement->id }}[imp_answer]" value="nicht wichtig" id="not_important"> Überhaupt nicht wichtig </input>
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
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="entzueckt" id="helpful"> Das würde mir sehr helfen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="wird erwartet" id="basic"> Das ist eine grundlegende Anforderung für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="gleichgueltig" id="irrelevant"> Das würde mich nicht betreffen </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="stoert" id="annoying"> Das wäre eine geringe Unannehmlichkeit für mich </input><br/>
                <input type="radio" name="{{ $requirement->id }}[dys_answer]" value="frustriert" id="problematic"> Das wäre ein großes Problem für mich </input><br/>
        </td>
    </tr>
</table>
