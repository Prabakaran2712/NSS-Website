const root = document.querySelector('#root');

const App = () => {
    const year = campData["year"];
    const noOfDays = campData["noOfDays"];
    let campDays = [];
    for (let day = 1; day <= noOfDays; day++) {
        let obj = {id: day, title: "Day " + day}
        campDays.push(obj)
    }
    const [curDay, setCurDay] = React.useState(1);
    const changeCurDay = (day) => {
        setCurDay(day);
    }
    return (
        <div className="mt-3 mb-5">
            <Title text={"Camp " + year} />
            <div className="row">
                <SideBar views={campDays} curView={{id: curDay}} changeCurView={changeCurDay} />
                <AccordionList title={`Day ${curDay} Events`} events={campData[curDay]["events"]} />
            </div>
        </div>
    );
}

ReactDOM.render(<App />, root);

