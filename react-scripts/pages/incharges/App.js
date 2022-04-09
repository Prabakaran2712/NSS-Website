const root = document.querySelector("#root");

const App = () => {
  if (expandWeb) {
    React.useEffect(() => {
      const accordionButton = document.querySelector(
        '[data-bs-target="#website"]'
      );
      const content = document.querySelector("#website");
      content.classList.toggle("collapsing");
      accordionButton.scrollIntoView();
      setTimeout(() => {
        content.classList.toggle("collapsing");
        accordionButton.classList.toggle("collapsed");
        content.classList.toggle("show");
      }, 500);
    }, []);
  }
  return (
    <div className="mt-3 mb-5">
      {/* incharges */}
      <Title text="Incharges" />
      <div className="row">
        {/* left side */}
        <div class="col-sm-12 col-md-6">
          <div class="accordion" id="accordionExample">
            <Accordion incharge="finalYears" title="Final years" />
            <Accordion incharge="preFinalYears" title="Pre final years" />
            <Accordion
              incharge="eventCoordinators"
              title="Event coordinators"
            />
            <Accordion incharge="treasurer" title="Treasurer" />
            <Accordion incharge="jointTreasurer" title="Joint treasurer" />
          </div>
        </div>
        {/* right side */}
        <div class="col-sm-12 col-md-6">
          <div class="accordion" id="accordion2">
            <Accordion
              incharge="regularActivitiesIncharges"
              title="Regular activities incharges"
            />
            <Accordion
              incharge="weekendActivities"
              title="Weekend activities incharges"
            />
            <Accordion incharge="report" title="Report incharges" />
            <Accordion incharge="publicRelation" title="Public relations" />
          </div>
        </div>
      </div>
      {/* design team */}
      <Title text="Design Team" />
      <div className="row">
        {/* left */}
        <div class="col-sm-12 col-md-6">
          <Accordion incharge="website" type="design" title="Website team" />
          <Accordion incharge="instagram" type="design" title="Instagram" />
        </div>
        {/* right */}
        <div class="col-sm-12 col-md-6">
          <Accordion incharge="drive" type="design" title="Drive" />
          <Accordion incharge="posters" type="design" title="Posters" />
        </div>
      </div>
    </div>
  );
};

ReactDOM.render(<App />, root);
