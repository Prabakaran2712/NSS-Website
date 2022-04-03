const RowCount = ({ curVal, setVal }) => {
  const options = [5, 10, 15, 20];
  return (
    <div class="col-2">
        <label htmlFor="rowsPerPage" class="mb-2">Rows per page</label>
      <select class="form-select"
        id="rowsPerPage"
        onChange={() => {
          setVal(document.querySelector("#rowsPerPage").value);
        }}
      >
        {options &&
          options.map((option) => {
            return (
              <option value={option} selected={curVal == option}>
                {option}
              </option>
            );
          })}
      </select>
    </div>
  );
};
