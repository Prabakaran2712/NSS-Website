const root = document.querySelector("#root");

const App = () => {
  return (
    <div className="mt-3 mb-5">
      <Title text="Messages" />
      <MessageBody />
      <AnalyticsBody />
    </div>
  );
};

ReactDOM.render(<App />, root);
