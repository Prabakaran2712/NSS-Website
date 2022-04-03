const AnalyticsTable = ({ curRows, startIndex }) => {
  const rows = curRows();
  return (
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">User agent</th>
          <th scope="col">City</th>
          <th scope="col">Region</th>
          <th scope="col">Country</th>
          <th scope="col">Time</th>
        </tr>
      </thead>
      <tbody>
        {rows &&
          rows.map((data, index) => {
            return (
              <tr>
                <th scope="row">{startIndex + index + 1}</th>
                <td style={{ maxWidth: "300px" }}>{data.ua}</td>
                <td>{data.city}</td>
                <td>{data.region}</td>
                <td>{data.country}</td>
                <td>{data.loggedAt}</td>
              </tr>
            );
          })}
      </tbody>
    </table>
  );
};
