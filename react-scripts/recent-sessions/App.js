const root = document.querySelector('#root');

const App = () => {
    const [curSession, setCurSession] = React.useState(recentSessions[0]);
    const changeCurSession = (sessionId) => {
        setCurSession(recentSessions.find(session => session.id === sessionId));
    }
    return (
        <div className="mt-3 mb-5">
            <Title text="Recent Sessions" />
            <div className="row">
                <SideBar views={recentSessions} curView={curSession} changeCurView={changeCurSession} />
                <RecentSessionContent session={curSession} />
            </div>
        </div>
    );
}

ReactDOM.render(<App />, root);

