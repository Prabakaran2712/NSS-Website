const root = document.querySelector('#root');

const App = () => {
    const [curAward, setCurAward] = React.useState(awards[0]);
    const changeCurAward = (awardId) => {
        setCurAward(awards.find(award => award.id === awardId));
    }
    return (
        <div className="mt-3 mb-5">
            <Title text="Awards" />
            <div className="row">
                <SideBar changeCurAward={changeCurAward} curAward={curAward} />
                <Content curAward={curAward} />
            </div>
        </div>
    );
}

ReactDOM.render(<App />, root);

