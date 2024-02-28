<div>
    <div>
        <label>first name</label>
        <input type="text" name="first_name"/>
    </div>
    <div>
        <label>first name</label>
        <input type="text" name="last_name"/>
    </div>

    <div>
        <label>address</label>
        <input type="text" name="address"/>
    </div>

    <div>
        <label>city</label>
        <input type="text" name="city"/>
    </div>

    <div>
        <label>country</label>
        <input type="text" name="country"/>
    </div>

    <div>
{{--        month/day/year--}}
        <label for="date_of_birth">date of birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth">
    </div>

    <div>
        <label>country</label>
        <input type="text" name="country"/>
    </div>

{{--    step 2--}}
    <div>
        <label>Are you married?</label>
        <input type="text" name="is_married"/>
    </div>
{{--    if yes--}}
    <div>
        <label>Date of marriage</label>
        <input type="date" name="date_of_marriage"/>
    </div>

    <div>
        {{--    if no--}}
        <label>Are you widowed?</label>
        <select name="is_widowed">
            <option value="true">Yes</option>
            <option value="false">No</option>
        </select>
        <br>
        <label>Have you ever been married in the past?</label>
        <select name="is_widowed">
            <option value="true">Yes</option>
            <option value="false">No</option>
        </select>
    </div>
</div>
