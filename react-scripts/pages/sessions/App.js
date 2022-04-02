const root = document.querySelector('#root');

const App = () => {
    const [curSession, setCurSession] = React.useState(sessionsList[0]);
    const changeCurSession = (sessionId) => {
        setCurSession(sessionsList.find(session => session.id === sessionId));
    }
    return (
        <div className="mt-3 mb-5">
            <Title text="Sessions" />
            <div className="row">
                <SideBar views={sessionsList} curView={curSession} changeCurView={changeCurSession} />
                <AccordionList title={curSession.title} events={sessionData[curSession.title]["events"]} />
            </div>
        </div>
    );
}

ReactDOM.render(<App />, root);

