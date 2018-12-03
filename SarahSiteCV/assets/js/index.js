/*-------------------------------------PARCOURS------------------------------*/ 

var App = React.createClass({ displayName: "App",

  render: function render() {
    var data = [
    {
      title: "2018 - 2019",
      content: "Interface3 - Web Application Developer bonjour"},
        
    {
      title: "2014 - 2017",
      content: "Enseignement de Promotion et de Formation Continue - Relations Publiques" },
              
{
      title: "2013 - 2014",
      content: "Enseignement de Promotion et de Formation Continue - Langues" },


    {
      title: "2010 - 2013",
      content: "Université Libre de Bruxelles - Psychologie" }];


    return (
      React.createElement(Accordion, { data: data }));

  } });


var Accordion = React.createClass({ displayName: "Accordion",

  componentWillMount: function componentWillMount() {
    var accordion = [];

    this.props.data.forEach(function (i) {
      accordion.push({
        title: i.title,
        content: i.content,
        open: false });

    });

    this.setState({
      accordionItems: accordion });

  },

  click: function click(i) {
    var newAccordion = this.state.accordionItems.slice();
    var index = newAccordion.indexOf(i);

    newAccordion[index].open = !newAccordion[index].open;
    this.setState({ accordionItems: newAccordion });
  },

  render: function render() {var _this = this;
    var sections = this.state.accordionItems.map(function (i) {return (
        React.createElement("div", { key: _this.state.accordionItems.indexOf(i) },
          React.createElement("div", {
              className: "title",
              onClick: _this.click.bind(null, i) },

            React.createElement("div", { className: "arrow-wrapper" },
              React.createElement("i", { className: i.open ?
                "fa fa-angle-down fa-rotate-180" :
                "fa fa-angle-down" })),


            React.createElement("span", { className: "title-text" },
              i.title)),


          React.createElement("div", { className: i.open ?
              "content content-open" :
              "content" },

            React.createElement("div", { className: i.open ?
                "content-text content-text-open" :
                "content-text" }, " ",
              i.content))));});





    return (
      React.createElement("div", { className: "accordion" },
        sections));


  } });


ReactDOM.render(
React.createElement(App, null),
document.getElementById('accordion'));

